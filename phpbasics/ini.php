<?php
/**
 * Understanding on php.ini
 */

class Library
{
    public $books = ['Quantum Physics', 'Discrete Maths', 'Linear Algebra'];

    public function showAllBooks () {
        echo implode('<br>', $this->books);
    }
}

function serialize_callable($missed_class) {
    spl_autoload($missed_class);
}

//$ser = 'O:7:"Library":1:{s:5:"books";N;}'; // Changed Class to MyLibrary
$ser = 'O:7:"Library":1:{s:5:"books";a:3:{i:0;s:15:"Quantum Physics";i:1;s:14:"Discrete Maths";i:2;s:14:"Linear Algebra";}}'; // Changed Class to MyLibrary

$unser = unserialize($ser);


print_r($unser->books);

$newObj = new Library();
echo "<br>";
var_dump($newObj->showAllBooks());


