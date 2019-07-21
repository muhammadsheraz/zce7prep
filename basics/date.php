<?php
// echo date("jS F, Y", strtotime("11.12.10"));
// // outputs 8th June, 2019
// echo "<br>";

// echo date("jS F, Y", strtotime("11/12/10"));
// // outputs 12th November, 2010
// echo "<br>";

// echo date("jS F, Y", strtotime("11-12-10"));
// // outputs 11th December, 2010
// echo "<br>";



// $date = new DateTime(); 

// print_r($date);

// Simple Comparing To DateTime obj dates

// $date1 = new DateTime('+1 Year');
// $date2 = new DateTime();

// echo $date1->format('Y-m-d H:i:s');


// echo $date1 > $date2;

// Setting new Date

// $date = new DateTime('2014-03-15');

// $dateInt = $date->diff(new DateTime('2014-02-15'));

// echo "<pre>";
// print_R($dateInt);
// die;

// DateTime Diff upto micro or milliseconds

$d2=new DateTime("2012-07-08 11:14:15.638276"); 
$d1=new DateTime("2012-07-08 11:14:15.889342"); 
$diff=$d2->diff($d1); 
echo "<pre>";
print_r( $diff ) ; 