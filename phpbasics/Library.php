<?php
/**
 * Created by PhpStorm.
 * User: msher
 * Date: 20/07/2019
 * Time: 12:04 PM
 */

class Library
{
    public $books = ['Quantum Physics', 'Discrete Maths', 'Linear Algebra'];

    public function showAllBooks () {
        echo implode('<br>', $this->books);
    }
}