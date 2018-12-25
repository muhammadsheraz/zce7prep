<?php
//error_reporting(E_STRICT);

//namespace App\SleepyHead;
//class SleepyHead {
//    protected $name = "Dozy";
//    public function __serialize() {
//        $this->name = "Asleep";
//    }
//    public function __unserialize() {
//        $this->name = "Rested";
//    }
//}
//
//$obj = new SleepyHead();
//$obj2 = unserialize(serialize(new SleepyHead()));

//echo "<pre>";
//var_dump($obj);
//print_r($obj2);
//die;

//$star = new StdClass;
//// replace this line
//$twin = clone($star);
//$star->name = "Castor";
//$twin->name = "Pollux";
//echo $star->name; // must be Castor

//$fruit = 'Apple';
//
//$fruit =& $best_fruit;
//
//
//$best_fruit = 'Apple is best fruit';
//
//echo $fruit . "<br>";
//
//$fruit = 'Apple is nice fruit';
//
//echo $best_fruit . "<br>";



//class b {
//
//}
//
//class a {
//    public $ref = '';
//
//    public function __construct($obj)
//    {
//        $this->ref = $obj;
//    }
//
//}
//
//
//$v1 = new a(new b());
//
//$v2 = clone($v1);
//
//echo "<pre>";
//print_R($v2->ref);
//
//
//$v2->ref= new stdClass();
//print_r($v2);

//namespace First;
//echo "<pre>";


//function speak($word) {
//    ///
//}

//namespace Second;
//class Speak {
//    function speak($word, $sentence, $statements) {
//     ///
//    }
//
//}


$data = ['one', 1, 2.5, true, 'grid'=>['apple', 1, true, new Exception()], new Exception(), \Exception::class];

echo "<pre>";

echo "Before";
echo "<br>";

 echo "print_r";
echo "<br>";
var_dump($data);

echo "<br>";

//$s_data = serialize($data);
//
//echo "<br>";
//echo "After Serialize and Unserialize";
//var_dump(unserialize($s_data));











