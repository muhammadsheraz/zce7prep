<?php
$fileinfo = finfo_open(FILEINFO_MIME_ENCODING);

foreach (glob('*') as $filename) {
    echo "$filename --->" . finfo_file($fileinfo, $filename) . "<br>";
}

echo "<br>";
echo "<br>";

echo "Using Object Oriented Approach";

echo "<br>";
echo "<br>";

$finfo = new finfo(FILEINFO_MIME);

echo $finfo->file('practice.txt');


$url = "https://upload.wikimedia.org/wikipedia/commons/a/aa/SmallFullColourGIF.gif";

file_put_contents("earth.gif", file_get_contents($url));








