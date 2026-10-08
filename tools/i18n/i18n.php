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
        if(!isTranslatable($text) && !isset($GLOBALS['force'][$text])) continue;
        $cand[$i] = [$text, $q];
    }
    /* Cadenas con comillas dobles e interpolacion: '"' ... '"' */
    $n = count($tokens);
    for($i = 0; $i < $n; $i++)
    {
        if($tokens[$i] !== '"') continue;
        $j = $i + 1; $raw = ''; $hasVar = false; $ok = true;
        while($j < $n && $tokens[$j] !== '"')
        {
            $t = $tokens[$j];
            $str = is_array($t) ? $t[1] : $t;
            if(is_array($t) && in_array($t[0], [T_VARIABLE, T_CURLY_OPEN, T_DOLLAR_OPEN_CURLY_BRACES])) $hasVar = true;
            $raw .= $str; $j++;
        }
        if($j >= $n) break;
        $prev = $i > 0 ? $tokens[$i-1] : null;
        $p = $i - 1; while($p >= 0 && is_array($tokens[$p]) && in_array($tokens[$p][0], [T_WHITESPACE, T_COMMENT, T_DOC_COMMENT])) $p--;
        $prevS = $p >= 0 ? (is_array($tokens[$p]) ? $tokens[$p][1] : $tokens[$p]) : '';
        $q = $j + 1; while($q < $n && is_array($tokens[$q]) && in_array($tokens[$q][0], [T_WHITESPACE, T_COMMENT, T_DOC_COMMENT])) $q++;
        $nextS = $q < $n ? (is_array($tokens[$q]) ? $tokens[$q][1] : $tokens[$q]) : '';
        $skip = ($nextS === '=>') || ($prevS === '[');
        $inner = preg_replace('/\\\\"/', '', $raw);
        if($hasVar && !$skip && strpos(str_replace('\\"', '', $raw), '\\') === false)
        {
            $letters = preg_replace('/\{\$[^}]*\}|\$[A-Za-z_][A-Za-z0-9_]*(->[A-Za-z_][A-Za-z0-9_]*)*/', '', $raw);
            if(isset($GLOBALS['force'][$raw]) || (isTranslatable($letters) && preg_match_all('/[A-Za-z]{3,}/', strip_tags($letters)) >= 1))
                $cand[$i] = [$raw, '"i', $j];     // 'i' = interpolada, span hasta $j
        }
        $i = $j;
    }
    /* Heredoc / nowdoc */
    for($i = 0; $i < $n; $i++)
    {
        if(!is_array($tokens[$i]) || $tokens[$i][0] !== T_START_HEREDOC) continue;
        $j = $i + 1; $raw = '';
        while($j < $n && !(is_array($tokens[$j]) && $tokens[$j][0] === T_END_HEREDOC)) { $raw .= is_array($tokens[$j]) ? $tokens[$j][1] : $tokens[$j]; $j++; }
        if($j >= $n) break;
        $trim = trim($raw);
        $letters = preg_replace('/\{\$[^}]*\}|\$[A-Za-z_][A-Za-z0-9_]*(->[A-Za-z_][A-Za-z0-9_]*)*/', '', $trim);
        if($trim !== '' && preg_match_all('/[A-Za-z]{3,}/', strip_tags($letters)) >= 2 && !preg_match('/^\s*(SELECT|INSERT|UPDATE|CREATE|<\?php)/i', $trim))
        {
            preg_match('/^\s*/', $raw, $lm); preg_match('/\s*$/', $raw, $tm);
            $cand[$i] = [$trim, 'H', $j, $lm[0], $tm[0]];
        }
        $i = $j;
    }
    return [$tokens, $cand];
}

function isTranslatable(string $s): bool
{
    $s2 = trim(strip_tags($s));
    if(preg_match_all('/[A-Za-z]/', $s2) < 2) return false;
    if(preg_match('#^(https?://|/|\.|\#|[a-z]+\.[a-z]{2,4}$)#i', $s2)) return false;
    $core = ltrim($s2, " \t\n([{<-–—:：.,'\"“¿¡*#@");
    if($core === '') return false;
    if(!preg_match('/\s/', $core) && !preg_match('/^[A-Z]/', $core)) return false;                      // palabra suelta en minuscula => identificador
    if(!preg_match('/\s/', $core) && preg_match('/[_\/:|=.]/', $core) && !preg_match('/^[A-Z][a-z]+$/', $core)) return false;
    return true;
}

function placeholders(string $s): array
{
    preg_match_all('/%(?:\d+\$)?[sdfu]|<[^>]+>|&[a-z]+;|\{[^}]*\}|\$[A-Za-z_>\-]+/i', $s, $m);
    $a = $m[0]; sort($a); return $a;
}

function fixPlural(string $s): string
{
    return preg_replace('/(\{\$lang->(?:executionCommon|execution->common)\})s\b/', '$1(s)', $s);
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
        foreach($cand as $c) { if(($argv[4] ?? '') === 'interp' && $c[1] !== '"i') continue; if(($argv[4] ?? '') === 'heredoc' && $c[1] !== 'H') continue; $unique[$c[0]] = ($unique[$c[0]] ?? 0) + 1; }
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
    $GLOBALS['force'] = $tr;
    $trusted = isset($argv[5]) ? json_decode(file_get_contents($argv[5]), true) : [];   // traducciones revisadas a mano (omiten la comparacion de marcadores)
    $report = ['translated' => 0, 'kept' => 0, 'placeholder_mismatch' => []];
    foreach(langFiles($repo) as $f)
    {
        $code = file_get_contents($f);
        [$tokens, $cand] = scan($code);
        $out = ''; $skipUntil = -1;
        foreach($tokens as $i => $t)
        {
            if($i <= $skipUntil) continue;
            $str = is_array($t) ? $t[1] : $t;
            if(isset($cand[$i]) && $cand[$i][1] === 'H')
            {
                [$text, , $end, $lead, $trail] = $cand[$i];
                $es = $tr[$text] ?? null;
                if($es !== null && $es !== '' && $es !== $text && (placeholders($text) === placeholders($es) || isset($trusted[$text])))
                {
                    $str = $str . $lead . $es . $trail; $skipUntil = $end - 1; $report['translated']++;
                }
                else { $report['kept']++; if($es !== null && $es !== $text) $report['placeholder_mismatch'][$text] = $es; }
            }
            elseif(isset($cand[$i]) && $cand[$i][1] === '"i')
            {
                [$text, , $end] = $cand[$i];
                $es = $tr[$text] ?? null;
                $okEs = $es !== null && $es !== '' && $es !== $text && (placeholders($text) === placeholders($es) || isset($trusted[$text]));
                if($okEs && preg_match('/(?<!\\\\)"/', $es) === 0)
                {
                    $str = '"' . fixPlural($es) . '"'; $skipUntil = $end; $report['translated']++;
                }
                else
                {
                    if($es !== null && $es !== $text) $report['placeholder_mismatch'][$text] = $es;
                    $report['kept']++;
                }
            }
            elseif(isset($cand[$i]))
            {
                [$text, $q] = $cand[$i];
                $es = $tr[$text] ?? null;
                if($es !== null && $es !== '' && $es !== $text)
                {
                    if(placeholders($text) === placeholders($es) || isset($trusted[$text])) { $str = quote(fixPlural($es), $q); $report['translated']++; }
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
