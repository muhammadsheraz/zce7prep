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

//echo 'b' <=> 'c';
//echo '2' <=> '1';
//echo 'apple' <=> 'fig';

## Constant arrays

define('Stack', ['a','b','c']);

var_dump(Stack);


