<?php
// echo strcmp(12345, '12345');

// if (12345 == '12345') {
//     echo "greater";
// } else {
//     echo "less";
// }


// $str = '12345';

// $result = sscanf($str, '%1d%1d%1d%1d%1d');
// list($serial) = sscanf("SN/2350001", "SN/%d");
// echo '<pre>';
// print_R($result);

// echo $serial;


// $checksum = crc32('0');
// printf("%u\n", $checksum);
// die;


// $str = 'abcdef';

// if (strpos($str, 'a')) {
//     echo "bingo";
// } else {
//     echo "shut up";
// }

// $str = printf('%.1f', 7.1);
// echo 'Zend PHP Certification';
// echo $str;


// $a = ["1"=>"A", 1=>"B", "C", 2=>"D"];

// print_r($a);

// $str = '12345';

// $qr = sscanf($str, '%1d%1d%1d');

// print_r($qr);

$number = 123;
printf("With 2 decimals: %1\$.2f
<br>With no decimals: %1\$u",$number);

die;