<?php
/* Uso: php han.php extract <repo> out.json | inject <repo> translations.json  — traduce literales con caracteres chinos en configs de UI */
$mode=$argv[1]??''; $repo=rtrim($argv[2]??'.','/');
$files=array_merge(glob("$repo/module/bi/config/*.php"), ["$repo/module/bi/config.php"], glob("$repo/module/metric/config/*.php"), ["$repo/module/ai/config/init.php"]);
function scanHan(string $code): array
{
    $tokens=token_get_all($code); $sig=[];
    foreach($tokens as $i=>$t) if(!is_array($t)||!in_array($t[0],[T_WHITESPACE,T_COMMENT,T_DOC_COMMENT])) $sig[]=$i;
    $pos=array_flip($sig); $cand=[];
    foreach($tokens as $i=>$t)
    {
        if(!is_array($t)||$t[0]!==T_CONSTANT_ENCAPSED_STRING||!preg_match('/\p{Han}/u',$t[1])) continue;
        $p=$pos[$i]; $nx=isset($sig[$p+1])?(is_array($tokens[$sig[$p+1]])?$tokens[$sig[$p+1]][1]:$tokens[$sig[$p+1]]):'';
        $pv=$p>0?(is_array($tokens[$sig[$p-1]])?$tokens[$sig[$p-1]][1]:$tokens[$sig[$p-1]]):'';
        if($nx==='=>'||$pv==='[') continue;                     // claves
        $q=$t[1][0]; $inner=substr($t[1],1,-1);
        if($q==="'") $text=str_replace(["\\'","\\\\"],["'","\\"],$inner); else { if(strpbrk($inner,'\\$')!==false) continue; $text=$inner; }
        $cand[$i]=[$text,$q];
    }
    return [$tokens,$cand];
}
function ph(string $s): array { preg_match_all('/%[sd]|<[^>]+>|\{[^}]*\}|\$[A-Za-z_]+/',$s,$m); $a=$m[0]; sort($a); return $a; }
if($mode==='extract'){ $u=[]; foreach($files as $f){ if(!is_file($f)) continue; [,$c]=scanHan(file_get_contents($f)); foreach($c as [$t]) $u[$t]=1; } $o=[];$n=0; foreach(array_keys($u) as $t) $o[++$n]=$t; file_put_contents($argv[3],json_encode($o,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT)); echo count($o)," unique\n"; exit; }
if($mode==='inject')
{
    $tr=json_decode(file_get_contents($argv[3]),true); $ok=0;$keep=0;
    foreach($files as $f)
    {
        if(!is_file($f)) continue; $code=file_get_contents($f); [$tokens,$cand]=scanHan($code); $out='';
        foreach($tokens as $i=>$t)
        {
            $s=is_array($t)?$t[1]:$t;
            if(isset($cand[$i])){ [$text,$q]=$cand[$i]; $es=$tr[$text]??null;
                if($es&&$es!==$text&&ph($text)===ph($es)&&!preg_match('/\p{Han}/u',$es)){ $s=$q==="'"?"'".str_replace(["\\","'"],["\\\\","\\'"],$es)."'":'"'.str_replace(['\\','"','$'],['\\\\','\\"','\\$'],$es).'"'; $ok++; } else $keep++; }
            $out.=$s;
        }
        file_put_contents($f,$out);
    }
    echo "translated $ok kept $keep\n";
}
