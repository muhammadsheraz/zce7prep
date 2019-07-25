<?php

error_reporting(E_ALL);

# Practice 1
 echo "<pre>";
 $fileName = __DIR__ . DIRECTORY_SEPARATOR . 'practice.txt';
// $fileNameBinary = __DIR__ . DIRECTORY_SEPARATOR . 'binary.txt';
//$fileImageBinary = __DIR__ . DIRECTORY_SEPARATOR . 'cereal.jpg';

// print_r(stream_get_transports());
// print_r(stream_get_wrappers());
// print_r(stream_get_filters());
//
//$memory = 5 * 1024 * 1024;
//
//$fp = fopen("php://temp/maxmemory: $memory", 'r+');
//
//$txt = fgets(STDIN);
//
//fputs($fp, $txt);
//
//rewind($fp);
//echo fgets($fp);
//
//
// function read($length='255') {
//     if (!isset($GLOBALS['StdinPointer'])){
//         $GLOBALS['StdinPointer']=fopen("php://stdin","r");
//     }
//     $line=fgets($GLOBALS['StdinPointer'],$length);
//     return trim($line);
// }

# Entire file to array
//$fileData = file($fileName);
//
//var_dump($fileData);

#Directly reading the file and throwing the content to ouput buffer
//readfile($fileName);

######

# Practicing Mode 'r' with fopen()
//$fhandle = fopen($fileName, 'r');
//while(!feof($fhandle))
//    echo fgets($fhandle);


//$fhandle = fopen($fileName, 'r+');
//
//$written = fwrite($fhandle, "23423 Blockchain was designed to make data decentralized.");
//
//echo $written;
//
//fclose($fhandle);

# Practicing Mode 'w' with fopen()
//$fhandle = fopen($fileName, 'w+');
//fread($fhandle, filesize($fileName));
//
////$written = fwrite($fhandle, "23423 Blockchain was designed to make data decentralized.");
////
////echo $written;
//
//fclose($fhandle);

# Practicing Mode 'a' and 'a+' with fopen()
//$fhandle = fopen($fileName, 'a');

//$fhandle = fopen($fileName, 'a+');
//
//if ($fhandle) {
//    $written = fwrite($fhandle, "PHP is a server side scripting language, best suited for web development.");
//
//    rewind($fhandle);
//    echo ftell($fhandle);
////
////    echo "<br>";
//
////    fseek($fhandle, 88);
////    echo "<br>";
//    fpassthru($fhandle);
//
//    fclose($fhandle);
//} else {
//
//}

//file_put_contents($fileName, "I vanishing all."); // Will remove the content of a file if previously existed.
//file_put_contents($fileName, "I appending it in the end.", FILE_APPEND | LOCK_EX);

//echo filectime($fileName);

//echo "<pre>";
//var_dump(pathinfo($fileName));

