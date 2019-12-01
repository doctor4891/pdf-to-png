<?php

use pdfToPng\PdfToPng;

require_once __DIR__ . '/vendor/autoload.php';
/*$img = PdfToPng::firstPage(__DIR__ . '/src/storage/name.pdf');
var_dump($img);*/

//$img = PdfToPng::singlePage(__DIR__ . '/src/storage/simple.pdf', 10);
//var_dump($img);
/*path to pdf and page number*/
//$img = PdfToPng::singlePage('http://www.africau.edu/images/default/sample.pdf',2);
//var_dump($img);
/*set custom storage path*/
\pdfToPng\Config::setStorage('new/path');
var_dump(\pdfToPng\Config::$storage);