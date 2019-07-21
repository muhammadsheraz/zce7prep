<?php

// function A() {
// try {
//         b();
//     } catch (Exception $e) {
//         echo "Exception caught in " . __CLASS__;
//     }
// }

// function B() {
//     C();
// }


// try {
//     A();
// } catch (Error $e) {
//     echo "Error caught in global scope: " . $e->getMessage();
// }

// Output: Error caught in global scope: Call to undefined function C()


// function fA() {
//     try {
//         fb();
//     } catch (Exception $e) {
//         echo "Exception caught in " . __CLASS__;
//     }
// }
// function fB() {
//     echo 5 / "five";
// }
// try {
//     fA();
// } catch (Error $e) {
//     echo "Error caught in global scope: " . $e->getMessage();
// }
// Output: Warning: A non-numeric value encountered
// Output: Warning: Division by Zero


class MyException extends Exception {

}

class ChildException extends MyException {

}

try {
    $a = [1,2];
    throw new ChildException;
} catch (ParseError $e) {
    echo "Caught Exception: " . get_class($e);
} catch (MyException $e) {
    echo "Caught MyException" . get_class($e);
}