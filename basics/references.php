<?php
// Argument Pass By Reference
// function add (&$num) {
//     return ++$num;
// }

// $number = 1;
// add($number);

// echo $number;


// Assign by / pass by references

// class A {
//     public $x = array();
// }


// $a = new A(); // D
// $b =& $a->x;

// array_push($b, "one");
// array_push($b, "two");

// echo count($b);

// array_push($a->x, 'three');

// echo count($b);

// print_R($a->x);


// class foo {
//     public $value = 42;

//     public function &getValue() {
//         return $this->value;
//     }
// }

// $obj = new foo;
// $myValue = &$obj->getValue(); // $myValue is a reference to $obj->value, which is 42.

// $obj->value++;
// $myValue++;

// echo "myValue: $myValue  obj->value: $obj->value";
// $obj->value = 2;
// echo $myValue;


// Passing by Reference in a simple function
// function printText (&$good = 'good') {
//     $good .= ' and intelligent';
//     echo "I am $good";
// }

// $str = 'awesome';
// printText($str);


// echo "<pre>";
// echo $str;


// Reference + TypeHint
// function trickyOne(stdClass &$x=null) {
//     $x = 42;
// }

// $x = new stdClass();

// trickyOne($x);

// echo $x;





