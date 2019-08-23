<?php
echo "<pre>";
// Practising XML with PHP
// $xmlNode = new DOMDocument('1.0', 'iso-8859-1');
// $element = $xmlNode->createElement('rest', 'rest value');

// $xmlNode->appendChild($element);

// echo $xmlNode->saveXML();


// $xml_string = new SimpleXMLElement($xml);
// $teens = $xml_string->xpath('*/child[@age>9]');

// echo "<pre>";
// print_r($teens);

// Using DOMDocument Class
// $xmlDom = new DOMDocument('1.0', 'iso-8859-1');
// $xmlDom->load('book.xml');

// Using SimpleXmlIterator Class

// $xmlDom->formatOutput = true;
// $xmlDom->save('newFile.xml');

// $xmlFile = 'book.xml';

// SimpleXML
// $sXml = simplexml_load_file($xmlFile);

// SimpleXML XPath
// $xpath = $sXml->xpath('/bookstore/book[price>30]');

// Importing to DOMElement and then converting to DOMDocument to perform XPath queries  
// $dElem = dom_import_simplexml($sXml);

// $domDoc = new DOMDocument('1.0', 'iso-8859-1');
// $dNode = $domDoc->importNode($dElem, true);
// $domDoc->appendChild($dNode);

// $dXPath = new DOMXpath($domDoc);
// $elements = $dXPath->query('book');

// if (!is_null($elements)) {
//     foreach ($elements as $element) {
//       echo "<br/>[". $element->nodeName. "]";
  
//       $nodes = $element->childNodes;
//       foreach ($nodes as $node) {
//         echo $node->nodeValue. "\n";
//       }
//     }
// }

// echo '<pre>';
// print_r($sXml->book);

$a= [1,2,3] + [6=>1,5,6];

echo "<pre>";
print_r($a);