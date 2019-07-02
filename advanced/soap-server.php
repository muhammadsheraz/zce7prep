<?php
// Practising SOAP SERVER

# $wsdl = 'http://wsf.cdyne.com/WeatherWS/Weather.asmx?WSDL';

ini_set('soap.wsdl_cache_enabled', 0);

Class Book {
    public $book;
    public $year;

}

function bookYear ($book = '') {
    $books = [
        'name' => 'Book Name 1', 'year' => 2011,
        'name' => 'Book Name 2', 'year' => 2012,
        'name' => 'Book Name 3', 'year' => 2013,
    ];

    if ($book == '') {
        throw new exception('Please provide a valid book name');
    } else {
        foreach ($books as $bk) {
            if ($bk['name'] == $book) {
                return $bk['year'];
            }
        }
    }

    return false;
}

$wsdl = 'http://localhost/zce7prep/advanced/books.wsdl';
$server = new SoapServer($wsdl, [
    'classmap' => [
        'book' => 'Book'
    ]
]);

$server->addFunction('bookyear');

$server->handle();
