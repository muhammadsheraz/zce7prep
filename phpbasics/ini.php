<?php
/**
 * Understanding on php.ini
 */
ini_set('unserialize_callback_func', 'serialize_callable');


function serialize_callable($missed_class) {

    require_once __DIR__ . DIRECTORY_SEPARATOR . $missed_class . '.php';
}

//$ser = 'O:7:"Library":1:{s:5:"books";N;}'; // Changed Class to MyLibrary
$ser = 'O:7:"Library":1:{s:5:"books";a:3:{i:0;s:15:"Quantum Physics";i:1;s:14:"Discrete Maths";i:2;s:14:"Linear Algebra";}}'; // Changed Class to MyLibrary

$unser = unserialize($ser);

echo "<br>";
var_dump($unser->showAllBooks());
echo "<br>";

$refObj = new ReflectionClass($unser);

echo "<pre>";
print_r($refObj->getMethods());






