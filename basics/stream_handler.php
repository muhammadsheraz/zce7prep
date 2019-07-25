<?php

if ($_GET) {
$text = <<<LARGE_TEXT
This is a very large text block
LARGE_TEXT;


    echo $text;
}


if ($_POST) {
    $text = <<<LARGE_TEXT
In that case when stream_get_contents/fread/fgets or other stream reading functions block indefinitely your script because they don't reached the limit of bytes to read use the socket_get_meta_data function to figure out the number of the bytes to read. 

It returns an array that contains a key named 'unread_bytes' and then pass that number to your favourite stream reading functions second parameter to read from the stream.

Maybe a good workaround to use the stream_select function, and set the socket to non-blocking mode with the use of stream_set_blocking(stream, 0). In this case the socket reading functions work properly.
LARGE_TEXT;
    echo $text;
    echo "<br>";
    echo json_encode($_POST);
}