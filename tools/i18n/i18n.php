<?php
/* Uso: php i18n.php extract <repo> <out.json> | inject <repo> <translations.json> [report.json] */
$mode = $argv[1] ?? ''; $repo = rtrim($argv[2] ?? '.', '/');

function langFiles(string $repo): array
{
    $files = glob("$repo/module/*/lang/en.php");
    foreach(glob("$repo/extension/*/*/ext/lang/en/*.php") as $f) $files[] = $f;
    foreach(glob("$repo/extension/*/*/*/*/ext/lang/en/*.php") as $f) $files[] = $f;
    $files[] = "$repo/api/v1/lang/en.php";
    return array_values(array_unique($files));
}

function target(string $enFile): string
{
    if(preg_match('#/lang/en\.php$#', $enFile)) return preg_replace('#/lang/en\.php$#', '/lang/es.php', $enFile);
    return preg_replace('#/lang/en/#', '/lang/es/', $enFile);
}

/* Devuelve [tokens, candidatos(index=>[texto,quote])] */
function scan(string $code): array
{
    $tokens = token_get_all($code);
    $sig = [];
    foreach($tokens as $i => $t) if(!is_array($t) || !in_array($t[0], [T_WHITESPACE, T_COMMENT, T_DOC_COMMENT])) $sig[] = $i;
    $pos = array_flip($sig);
    $cand = [];
    foreach($tokens as $i => $t)
    {
        if(!is_array($t) || $t[0] !== T_CONSTANT_ENCAPSED_STRING) continue;
        $p = $pos[$i];
        $prev = $p > 0 ? $tokens[$sig[$p-1]] : null;
        $next = isset($sig[$p+1]) ? $tokens[$sig[$p+1]] : null;
        $prevS = is_array($prev) ? $prev[1] : $prev; $nextS = is_array($next) ? $next[1] : $next;
        if($nextS === '=>') continue;                         // clave
        if($prevS === '[' && $nextS === ']') continue;         // indice
        if($prevS === '[' ) continue;
        $raw = $t[1]; $q = $raw[0]; $inner = substr($raw, 1, -1);
        if($q === "'") $text = str_replace(["\\'", "\\\\"], ["'", "\\"], $inner);
        else
        {
            if(strpbrk($inner, '\\$') !== false || strpos($inner, '{') !== false && strpos($inner, '{$') !== false) continue;
            $text = $inner;
        }
        if(!isTranslatable($text)) continue;
        $cand[$i] = [$text, $q];
    }
    return [$tokens, $cand];
}

function isTranslatable(string $s): bool
{
    $s2 = trim(strip_tags($s));
    if(preg_match_all('/[A-Za-z]/', $s2) < 2) return false;
    if(preg_match('#^(https?://|/|\.|\#|[a-z]+\.[a-z]{2,4}$)#i', $s2)) return false;
    if(!preg_match('/\s/', $s2) && !preg_match('/^[A-Z]/', $s2)) return false;       // palabra suelta en minuscula => identificador
    if(!preg_match('/\s/', $s2) && preg_match('/[_\-\.\/:|=]/', $s2) && !preg_match('/^[A-Z][a-z]+$/', $s2)) return false;
    return true;
}

function placeholders(string $s): array
{
    preg_match_all('/%(?:\d+\$)?[sdfu]|<[^>]+>|&[a-z]+;|\{[^}]*\}|\$[A-Za-z_>\-]+/i', $s, $m);
    $a = $m[0]; sort($a); return $a;
}

function quote(string $text, string $q): string
{
    if($q === "'") return "'" . str_replace(["\\", "'"], ["\\\\", "\\'"], $text) . "'";
    return '"' . str_replace(['\\', '"', '$'], ['\\\\', '\\"', '\\$'], $text) . '"';
}

if($mode === 'extract')
{
    $unique = []; $perFile = [];
    foreach(langFiles($repo) as $f)
    {
        [, $cand] = scan(file_get_contents($f));
        foreach($cand as [$text]) { $unique[$text] = ($unique[$text] ?? 0) + 1; }
        $perFile[str_replace("$repo/", '', $f)] = count($cand);
    }
    ksort($unique);
    $out = []; $n = 0; foreach($unique as $text => $c) $out[++$n] = $text;
    file_put_contents($argv[3], json_encode($out, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT));
    echo count($perFile), " files, ", array_sum($perFile), " strings, ", count($out), " unique\n";
    exit;
}

if($mode === 'inject')
{
    $tr = json_decode(file_get_contents($argv[3]), true);       // en => es
    $report = ['translated' => 0, 'kept' => 0, 'placeholder_mismatch' => []];
    foreach(langFiles($repo) as $f)
    {
        $code = file_get_contents($f);
        [$tokens, $cand] = scan($code);
        $out = '';
        foreach($tokens as $i => $t)
        {
            $str = is_array($t) ? $t[1] : $t;
            if(isset($cand[$i]))
            {
                [$text, $q] = $cand[$i];
                $es = $tr[$text] ?? null;
                if($es !== null && $es !== '' && $es !== $text)
                {
                    if(placeholders($text) === placeholders($es)) { $str = quote($es, $q); $report['translated']++; }
                    else { $report['placeholder_mismatch'][$text] = $es; $report['kept']++; }
                }
                else $report['kept']++;
            }
            $out .= $str;
        }
        file_put_contents(target($f), $out);
    }
    if(isset($argv[4])) file_put_contents($argv[4], json_encode($report, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
    echo "translated {$report['translated']} kept {$report['kept']} mismatches ".count($report['placeholder_mismatch'])."\n";
}
