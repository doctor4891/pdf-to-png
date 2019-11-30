<?php
namespace pdfToPng;

/**
 * Class ConvertDirector
 * @package pdfToPng
 */
class ConvertDirector
{
    /**
     * @param $pdfPath string
     * @return string
     */
    public static function firstPage($pdfPath){
        $converter = new SinglePage($pdfPath,1);
        return $converter->convert();
    }

    /**
     * @param $pdfPath string
     * @param $page integer
     * @return string
     */
    public static function singlePage($pdfPath, $page){
        $converter = new SinglePage($pdfPath,$page);
        return $converter->convert();
    }
}