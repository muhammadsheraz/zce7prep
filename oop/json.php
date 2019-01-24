<?php
$data = ['one', 1, 2.5, true, 'grid'=>['apple', 1, true, new Exception()], new Exception(), \Exception::class];

echo "<pre>";
//
//echo "Before";
//echo "<br>";
//
// echo "print_r";
//echo "<br>";
//var_dump($data);

//echo "<br>";

$s_data = json_encode($data);
//
echo "<br>";
echo "After json encode and decode";
var_dump(json_decode($s_data, true));











