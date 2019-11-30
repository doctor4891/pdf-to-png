<?php

use pdfToPng\ConvertDirector;

require_once __DIR__ . '/vendor/autoload.php';
/*$img = ConvertDirector::firstPage(__DIR__ . '/src/storage/name.pdf');
var_dump($img);*/
//$img = ConvertDirector::singlePage(__DIR__ . '/src/storage/simple.pdf', 10);
//var_dump($img);
$img = ConvertDirector::singlePage('http://www.africau.edu/images/default/sample.pdf',2);
//var_dump($img);