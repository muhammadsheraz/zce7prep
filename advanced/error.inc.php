<?php
/**
 * Created by PhpStorm.
 * User: msher
 * Date: 14/07/2019
 * Time: 9:40 AM
 */
set_error_handler ('eHandler');
function eHandler ($errno, $errstr, $errfile, $errline) {
    echo "<pre>";
    var_dump(debug_print_backtrace());
    echo "</pre>";

    return true;
}

function newFunc($var) {
    echo $var;
//    $mysql = new mysql();
}