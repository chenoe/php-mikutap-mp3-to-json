<?php
$n="track.json";
$r="base64/";
$z=11;
function f($a){  
$b='';  
if(file_exists($a)){
$i=finfo_open(FILEINFO_MIME_TYPE);
$m=finfo_file($i, $a);
finfo_close($i);
$d=base64_encode(file_get_contents($a));  
$b='data:'.$m.';base64,'.$d;  
}  
return $b;  
};
$h=chr(13).chr(10);
$m=fopen($n,"w");
fwrite($m,$h."{".$h);
$s=0;
for ($i=1;$i<$z;$i++) {
$e=f($r.$i.'.mp3');
fwrite($m,'"'.$s.'.mp3":"'.$e.'",'.$h);
$s++;
};
$e=f($r.$z.'.mp3');
fwrite($m,'"'.($z-1).'.mp3":"'.$e.'"');
fwrite($m,$h."}".$h);
fclose($m);
echo "OK"
?>
