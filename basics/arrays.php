<?php
/**
 * Practising on Arrays
 */
$playerScores = [
    'mark' => 35,
    'stark' => 85,
    'david' => 12,
    'zain' => 67,
    'ali' => 42,
    'angelina' => 51,
];

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

echo "<pre>";
// $a = [
//     "2" =>"hello",
//     0b100 => ' this is ',
//     0x03 =>"world",
//     "04" =>"PHP",
//     8.7 =>"!!!!"
// ];

//$a = ["2" =>"hello"];
////
////$a[] = 5;
////
////echo "<pre>";
////print_r($a);

# practising array_​change_​key_​case()


//
//$scores = array_change_key_case($playerScores, CASE_UPPER);
//
//var_dump($scores);

# practising array_chunk()

//$chunk = array_chunk($playerScores, 2);
//
//var_dump($chunk);

# practising array_column()

//$column = array_column($records, 'first_name');

//var_dump($column);

# practising array_combined()
//
//$array_keys = [
//  'name',
//  'email',
//  'phone',
//];
//
//$array_values = [
//    'Sheraz',
//    'sheraz@example.com',
//    '123456778',
//];
//
//$arrayCom = array_combine($array_keys, $array_values);
//
//print_R($arrayCom);

# practising array_count_values()

//print_r(array_count_values(['sheraz','ali','mark','anna','sheraz']));

# practising array_diff_assoc()

//print_r(array_diff_assoc(['first'=>'1', '2', '3', '4'], [1,2,3]));

# practising array_fill_keys()

//print_r(array_fill_keys(['apple','banana','orange'], [2,3,4,5,5]));

# practising array_fill()

//print_r(array_fill(0,6,['apple','banana','orange']));


# practising array_walk_recursive()

//array_walk_recursive($playerScores, function (&$item, &$key) {
//    $item *=  2;
//});
//
//print_r($playerScores);


//print_R(range(1,20, 2));


//class Foo Implements ArrayAccess {
//    function offsetExists($k) { return true;}
//    function offsetGet($k) {return 'a';}
//    function offsetSet($k, $v) {}
//    function offsetUnset($k) {}
//}
//$x = new Foo();
//echo array_key_exists('foo', $x)?'true':'false';

function hint (int $h) {

}