<?php
//include "error.inc.php";

//try {
//    newFunc();
//    noFunc();
//} catch (Exception $e) {
//    //    var_dump($e->getTrace());
//    echo "Throwable:: " . $e->getTraceAsString();
//
//
////    throw $e;
//} catch (Error $er) {
//   echo "Error:: " . $er->getTraceAsString();
//
//
//}

//$handler = function($errorNumber, $errorMessage, $file, $line) {
//    echo "Error [$errorNumber] in [$file] at line [$line]:
//'[$errorMessage]' <br>";
//};
//set_error_handler($handler);
//try {
//    echo $a;
//    session_start();
//    echo session_id();
//} catch (Throwable $e) {
//    echo "Error caught!";
//}

$handler = function($exception) {
    echo $exception->getMessage();
};
set_exception_handler($handler);

badFuncCall();
