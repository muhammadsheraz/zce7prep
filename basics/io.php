<?php
# Practice 1
 echo "<pre>";
 print_r(stream_get_transports());
 print_r(stream_get_wrappers());
 print_r(stream_get_filters());

$memory = 5 * 1024 * 1024;

$fp = fopen("php://temp/maxmemory: $memory", 'r+');

$txt = fgets(STDIN);

fputs($fp, $txt);

rewind($fp);
echo fgets($fp);


 function read($length='255') {
     if (!isset($GLOBALS['StdinPointer'])){
         $GLOBALS['StdinPointer']=fopen("php://stdin","r");
     }
     $line=fgets($GLOBALS['StdinPointer'],$length);
     return trim($line);
 }
