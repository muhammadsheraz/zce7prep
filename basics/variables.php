<?php
/** 
 * Variable Types
 * There are 3 types of varibles:
 * 1. Scalar
 * 2. Composite
 * 3. Resources
 * */

//  $x = 0x4a;
//  $n = 063;

// var_dump($x);

//  echo "I can see " . $x . " ghosts in " . $n . " houses";

//  exit();

$a=100;
function a($b=1) {

    $a=0;
    global $a;

    return $a/10 * $b;
}


echo a(A());
exit();