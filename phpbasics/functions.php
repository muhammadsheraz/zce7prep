<?php
//namespace C;
//\B\Hello();
// function complicated($compulsory, ...$extras, $animal) {
//     // I want to reference the variable with the value "cat"
// }

// complicated(1,2,3,"cat");


// if (!is_callable(function () {
//     echo "I am very late";
// })) {
//     function sayHello() {
//         echo "Say Something";
//     }
// }

// sayHello();

//function Hello() { echo __NAMESPACE__; }
//function countArgs() {
//    echo func_get_arg(6); // Will produce warning
//}

//function addValues() {
//    $sum = 0;
//    for ($i=1;$i<=func_num_args(); $i++) {
//        $sum += func_get_arg($i);
//    }
//
//    return $sum;
//}
//
//echo addValues(1,2,3);
//
//echo countArgs(1,2,3,4,5,6);
//
//echo func_num_args();

//declare(strict_types=1);

//function calc():double {
//    $a = '25';
//    $c = (integer) $a;
//    return $c;
//}

//Fatal error: Uncaught TypeError: Return value of calc() must be an instance of double,
//echo gettype(calc());


//function calc():float {
//    $a = '25 abc';
//    $c = (string) $a;
//    return $c;
//}
//
////Notice: A non well formed numeric value encountered
//echo gettype(calc());

//
//function calc():double {
//    $a = '25 abc';
//    $c = (string) $a;
//    return $c;
//}
//
////Fatal error: Uncaught TypeError: Return value of calc() must be an instance of double, string returned
//echo gettype(calc());

//function calc():double {
//    $a = 25;
//    $c = (float) $a;
//    return $c;
//}
//
////Fatal error: Uncaught TypeError: Return value of calc() must be an instance of double, float returned
//echo gettype(calc());


//function calc():float {
//    $a = 25;
//    $c = (double) $a;
//    return $c;
//}
//
////double
//echo gettype(calc());


//function calc():float {
//    $a = 25;
//    $c = (integer) $a;
//    return $c;
//}
//
////double
//echo gettype(calc());

//declare(strict_types=1);
//function multiply (float $a, float $b):integer {
//    return (integer)$a * (integer) $b;
//}
//
//$val = multiply(3, 2);
//
////Fatal error: Uncaught TypeError: Return value of multiply() must be an instance of integer, integer returned
//echo gettype($val);


//function func ($v, $i) {
//    echo "I have " . func_get_args() . " args";
//
//    print_r(func_get_args());
//}
//
//echo func(1,2,3,4,'apple', 'orange');


// if (!is_callable(function(){echo "Hello";})) {
//     function sayHello() {
//         echo "World!";
//     }
// }
// sayHello();


// function z($x) {
//     return function ($y) use($x) {
//         return str_repeat($y, $x);
//     };

// }

// $a = z(2);
// $b = z(3);

// echo $a(3) . $b(2);


// class C {
//     public $x = 1;
//     function __construct() { $this->x;}
//     function __invoke() { return ++$this->x; }
//     function __toString() { return  --$this->x;}
// }

// $obj = new C();
// echo $obj(); 
// class Base {
//     protected static function whoami() {
//     echo "Base ";
//     }
//     public static function whoareyou() {
//         static::whoami();
//     }
// }

// class A extends Base {
//     public static function test() {
//         Base::whoareyou();
//     } 


// self::whoareyou();
// parent::whoareyou();
// A::whoareyou();
// static::whoareyou();
// public static function whoami() {
// echo "A";

// class B extends A {
// }
// public static function whoami() {
// echo "B ";
// B::test();



function counter($start, &$stop)
{
    echo "<br> $stop > $start";
    
    if ($stop> $start)
    {
        return;
    }
    ++$stop;
    counter($start--, $stop);
}

$start= 5;
$stop= 2;
counter($start, $stop); 

####################################
// function ratio ($xl = 10, $x2)
// {

// if (isset ($x2)) {
//     return $x2 / $xl; 
// }
// }

// echo ratio (0); 
####################################
// function increment (&$val)
// {
//     return $val + 1;
// }

// $a= 1;
// echo increment ($a);
// echo increment ($a); 

#############################
// $int = 34;

// function change ($int) {
//     echo $int;
// }

// change($int+++1+1+$int++);


