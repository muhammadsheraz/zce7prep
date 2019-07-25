<?php
# Basic stream context implementation
$filename = 'http://localhost/zce7prep/basics/stream_handler.php';

## stream context with simple GET
//$options = [
//    'http' => [
//        'method' => 'GET',
//    ],
//];
//
//$stream_context = stream_context_create($options);
//
//$fh = fopen('http://localhost/zce7prep/basics/stream_handler.php', 'r', false, $stream_context);
//
//while(!feof($fh))
//    echo fread($fh, 10) . ' end here <br>';

## Stream context with simple post test
//$postData = http_build_query([
//    'name' => 'Muhammad Sheraz',
//    'email' => 'sheraz@example.com',
//    'message' => 'Hey, just wanted to share a good news that I am going to attempt ZCE exam soon.',
//]);
//
//$options = [
//    'http' => [
//        'method' => 'POST',
//        'header' => [
//            'Content-Type: application/x-www-form-urlencoded',
//        ],
//        'content' => $postData
//    ],
//];
//
//$stream_context = stream_context_create($options);
//
//$fh = fopen($filename, 'r', false, $stream_context);
//
//$content = fread($fh,1024);
//echo $content;

# Using stream_context_set_option
//$post_data = ('email=sheraz@example.com&password=' . md5('Simple')); // Also worked with this
//$post_data = http_build_query([
//    'email' => 'sheraz@example.com',
//    'password' => md5('Simple'),
//]);
//
//$options = [
//    'http' => [
//        'method' => 'POST',
//        'header' => [
//            'content-type: application/x-www-form-urlencoded',
//        ],
//    ]
//];
////
////
//$stream_context = stream_context_create($options, ['class' => 'Executive']);
//stream_context_set_option($stream_context, 'http', 'content', $post_data);
//
//$fh = @fopen($filename, 'r', false, $stream_context);
//
//if ($fh) {
//    while(!feof($fh))
//        echo fread($fh, 1024);
//} else {
//    throw new  Exception('Invalid file resource');
//}

## using stream_get_line and stream_get_contents
//$post_data = http_build_query([
//    'email' => 'sheraz@example.com',
//    'password' => md5('Simple'),
//]);
//
//$options = [
//    'http' => [
//        'method' => 'POST',
//        'header' => [
//            'content-type: application/x-www-form-urlencoded',
//        ],
//    ]
//];
//
//$stream_context = stream_context_create($options, ['class' => 'Executive']);
//stream_context_set_option($stream_context, 'http', 'content', $post_data);
//
//$fh = @fopen($filename, 'r', false, $stream_context);
//
//if ($fh) {
////    echo stream_get_line($fh, 500);
////    echo stream_get_contents($fh);
//} else {
//    throw new  Exception('Invalid file resource');
//}


