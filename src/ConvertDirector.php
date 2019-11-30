<?php
namespace pdfToPng;

class ConvertDirector
{
    public static function firstPage($pdfPath){
        $converter = new SinglePage($pdfPath,1);
        return $converter->convert();
    }

    public static function singlePage($pdfPath, $page){
        $converter = new SinglePage($pdfPath,$page);
        return $converter->convert();
    }
}