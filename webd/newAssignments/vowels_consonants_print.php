<?php
$f1=fopen("readfile.txt","r");
// $content=fread($f1,filesize("readfile.txt"));
$f2=fopen("vowel_file.txt","w");
$f3=fopen("consonant_file.txt","w");


while($a=fgetc($f1)){
$a=strtolower($a);
if($a=="a" || $a=="e" || $a=="i" || $a=="o" || $a=="u"){
    fwrite($f2,$a);
}
else
    fwrite($f3,$a);
}
?>