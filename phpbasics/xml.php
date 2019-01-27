<?php
// Practising XML with PHP
// $xmlNode = new DOMDocument();
// $xmlNode->loadXML('<root><node/></root>');
// $element = $xmlNode->createElement('rest', 'rest value');

// $xmlNode->appendChild($element);

// echo $xmlNode->saveXML();

$xml = <<<XML_STR
<root>
    <parent name="peter">
        <child age="20">James</child>
        <child age="5">LiLa</child>
    </parent>
    <parent name="anna">
        <child age="10">Dido</child>
        <child age="11">George</child>
    </parent>
</root>
XML_STR;


$xml_string = new SimpleXMLElement($xml);
$teens = $xml_string->xpath('*/child[@age>9]');

echo "<pre>";
print_r($teens);