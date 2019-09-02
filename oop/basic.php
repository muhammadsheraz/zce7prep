<?php
// namespace MyNameSpace;

// class MyClass {

// }

// echo MyClass::class;

// class System {
//     public $config = ['db' => 'homestead', 'user' => 'root'];


//     public function getConfig ($key = 'db') {
//         # return $this->config[$key];
//         return 'Checking';
//     }
// }

// echo System::getConfig('user') . PHP_EOL;

// class C {
//     public $ello = 'ello';
//     public $c;
//     public $m;
//     function __construct($y) {
//         $this->c = function($f) {
//             return $f() . $this->ello; // INSERT LINE OF CODE HERE
//         };

//         $this->m = function() {
//             return "h";
//         };
//     }
// }

// $x = new C("h");
// $f = $x->c;
// echo $f($x->m); 


// class c {
//     const A = 'Hello';

//     function __toString() {

//         return  static::A;
//     }
// }

// echo new C();

//class BaseClass {
//    public static $name = 'sheraz';
//    private $rollNo = 123456;
//
//    public static function getUserDetail() {
//        return self::$name;
//    }
//}
//
//$base = new BaseClass();
//
//echo BaseClass::getUserDetail();

// trait MyTrait {
//     private $abc = 1;

//     public function increment() {
//         $this->abc++;
//     }

//     public function getValue() {
//         return $this->abc;
//     }
// }

// class MyClass {

//     use MyTrait;

//     public function incrementBy2() {

//         $this->increment();

//         $this->abc++;
//     }
// }

// $c = new MyClass;

// $c->incrementBy2();

// $obj = (object) ['apple','orange','coconut'];

// echo count($obj);


// class obj implements ArrayAccess {
//     private $container = array();

//     public function __construct() {
//         $this->container = array(
//             "one"   => 1,
//             "two"   => 2,
//             "three" => 3,
//         );
//     }

//     public function offsetSet($offset, $value) {
//         if (is_null($offset)) {
//             $this->container[] = $value;
//         } else {
//             $this->container[$offset] = $value;
//         }
//     }

//     public function offsetExists($offset) {
//         return isset($this->container[$offset]);
//     }

//     public function offsetUnset($offset) {
//         unset($this->container[$offset]);
//     }

//     public function offsetGet($offset) {
//         return isset($this->container[$offset]) ? $this->container[$offset] : null;
//     }
// }

// $obj = new obj;

// $obj = ['apple','mango','grapes'];

// echo count($obj);
// echo "<pre>";
// $arr  = ['apple1','mango2','grapes3'];

// echo "Original Array <br>";
// print_r($arr);
// echo "reversed Array <br>";
// rsort($arr, SORT_NATURAL);
// print_r($arr);

// $array = array("a"=>"Sue","b"=>"Mary","c"=>"John","d"=>"Anna");
// $array[array_rand($array)];

// class NewLand {  
//     protected $num = 'I am VIP';
// }

// class Number {  
//     protected $num = 'I am Local Private';

//     public function mul() {
//         return function ($x) {
//             return isset($this) ? 'Object Context: Private member:' . $this->num : 'Static Context';
//         };
//     }
// }
// $newland = new NewLand();

// $number1 = new Number(1);

// $closure = $number1->mul();

// $x = Closure::bind($closure, $newland);

// echo $x(5);


// class Number {
//     private $v;
//     private static $sv = 10;

//     public function __construct($v) { $this->v = $v; } 

//     public function mul() {
//         return static function ($x) {
//             return isset($this) ? $this->v*$x : self::$sv*$x;
//         };
//     }
// }


// $one = new Number(1);
// $two = new Number(2);
// $double = $two->mul();
// $x = Closure::bind($double, $two);
// echo $x(5);


// trait PDF {
//     private function getVendor () { return "Adobe Acrobate"; }
// }

// trait Word {
//     private function getVendor () { return "MS Office"; }
// }

// class Document {
//     use PDF, Word {
//         PDF::getVendor insteadof Word;
//         Word::getVendor as wordVendor;
//     }


//     public function showVendor() {
//         return $this->getVendor();
//     }

//     public function showOtherVendor() {
//         return $this->wordVendor();
//     }    
// }

// $doc = new Document();

// echo $doc->showVendor();
// echo "<br>";
// echo $doc->showOtherVendor();



// echo substr_compare("foobar", "bar", 4);

// function modifyArray (&$array)
// {
//     foreach ($array as &$value)
//     {
//         $value = $value + 1;
//     }

//     $value = $value + 2;
// }

// $array = array (1, 2, 3);
// modifyArray($array);


// print_R($array);


// $d2=new DateTime("2012-07-08"); 
// $d1=new DateTime("2012-07-08"); 


// echo $d1 == $d2;

$foods = [
    [
        'foodType' => 'fruits',
        'itemID' => 1,
        'itemName' => 'apple',
    ],

    [
        'foodType' => 'fruits',
        'itemID' => 2,
        'itemName' => 'banana',
    ],

    [
        'foodType' => 'veggies',
        'itemID' => 3,
        'itemName' => 'carrot',
    ],

    [
        'foodType' => 'veggies',
        'itemID' => 4,
        'itemName' => 'broccoli',
    ]

];

$grouped_foods = [];
$groupByColumn = 'foodType';

array_filter($foods, function ($foodItem) use(&$grouped_foods, $groupByColumn) {
    $grouped_foods[$foodItem[$groupByColumn]][] = array_filter($foodItem, function ($key) use($groupByColumn) {
        return $key != $groupByColumn;
    }, ARRAY_FILTER_USE_KEY);
});


echo "<pre>";
print_R($grouped_foods);
echo "</pre>";
