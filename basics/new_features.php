<?php
# Understanding new features
// Scalar type declaration (coercive and strict)

//function sumVar (int ...$num) {
//    return array_sum($num);
//}
//
//echo sumVar('1',2,3);

## Return type declaration
//function sumVar (int ...$num):int {
//    return array_sum($num);
//}
//
//echo sumVar('1',2,3);

## Null coalescing operator
//$fruit['sweet'] = 'apple';
//$fruit['sour'] = 'kiwi';
//
//echo $fruit['sweet'] ?? 'coconut';

## Spaceship operator

//echo 'cat' <=> 'bat';
//echo '2' <=> '1';
//echo 'apple' <=> 'fig';

## Constant arrays

//define('Stack', ['a','b','c']);
//
//var_dump(Stack);

#Constant Array using define
//const FRUIT_BASKET = ['apple','mango','orange','strawberry'];
//print_r(FRUIT_BASKET);

//define('FRUIT_BASKET', ['apple','mango','orange','strawberry']);

//print_r(FRUIT_BASKET);
//$func = function () { return "Its showtime."; };
//define('SHOW', $func);

//const SHOWTIME = SHOW; // will throw undefined constant SHOW

//echo SHOWTIME;

//echo SHOW(); // output: call to undefined constant show

# Anonymous Class

//function carEngine ($class) {
//    echo get_class($class);
//
//    echo "<br>";
//    echo $class->startCarEngine('Audi');
//}
//
//interface CarEngine {
//    public function startCarEngine ($carName, $openSunRoof = false);
//}
//
//$carClass = new class implements CarEngine {
//    public function startCarEngine($carName, $sunRoof = true) {
//        $process = "Starting $carName's engine";
//
//        if ($sunRoof) {
//            $process .= ' and opening Sun roof.';
//        }
//
//        return $process;
//    }
//};
//
//carEngine($carClass);

# Closure::class()

//class BaseTime {
//    private $time;
//
//    public function __construct()
//    {
//        $this->time = date('Y-m-d H:i:s');
//    }
//}
//
//$showTime = function ($format) {
//    return (new DateTime($this->time))->format($format);
//};
//
//echo $showTime->call(new BaseTime(), $format = 'm/d/Y');


