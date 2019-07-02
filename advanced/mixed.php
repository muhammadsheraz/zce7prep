<?php

// class Test {
//     public function _call($name, $args)
//     {
//         call_user_func_array(array('static', "test$name"), $args);
//     }
//     public function testS($a) {
//         echo "$a,";
//     }
// }    

// class Test2 extends Test {
//     public function testS($a) {
//         echo "$a,$a,";
//     }
// }

// $test = new Test2();
// $test->S('A'); 



// class Magic {
//     protected $v = array("a" => 1, "b" => 2, "c" => 3);
//     public function &__get($v) {
        
//         return $this->v[$v];
//     }
// }

// $m = new Magic();
// $m->d[] = 4;
// echo $m->d[0];

// print_r($m->d);