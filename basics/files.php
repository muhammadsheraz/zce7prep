<?php
//touch("practice.txt");
//
//if (file_exists("practice.txt"))
//    echo "File available";


// Shell command execution using backticks
// Deleting File
//`del practice.txt`;

//if (file_exists("practice.txt"))
//    echo "File still available even it is deleted";


$fh = fopen("practice.txt", 'r');


echo "<pre>";
//print_r((fread($fh, 1024)));
print_r(htmlspecialchars(fread($fh, 1024)));







