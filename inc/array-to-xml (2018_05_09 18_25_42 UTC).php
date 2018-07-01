<?php

include 'inc/array/tips.php';

// Create tag products
$xml = new SimpleXMLElement('<tips/>');

// Walk the array with callback to method $xml->addChild($this)
array_walk_recursive($tips, array($xml, 'addChild'));

// Save generated content to file.
file_put_contents('tips.xml', $xml->asXML());

?>
