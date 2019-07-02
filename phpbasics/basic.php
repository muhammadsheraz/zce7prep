<?php
// Short Ternary Syntax
$dir = "/var/www";
$directory = $ufo ?? 'Directory not found';

echo $directory;
// the above will through E_NOTICE


// Null Coalescing Operator
$dir = "/var/www";
$directory = $dir ?? 'Directory not found';

echo $directory;



echo __file__;