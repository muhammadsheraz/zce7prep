<?php
// Practising SOAP CLIENT

Class Book {
    public $book;
    public $year;
}

ini_set('soap.wsdl_cache_enabled', 0);

$wsdl = 'http://localhost/zce7prep/advanced/soap-server.php?WSDL';

$client = new SoapClient($wsdl, [
    'trace' => 1,
    'cache_wsdl' => WSDL_CACHE_NONE
]);


$book = new Book();
$book->book = 'Book Name 1';

$response = $client->bookYear($book);

var_dump($response);




