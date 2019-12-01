<?php
namespace pdfToPng;

/**
 * Class PdfToPng
 * @package pdfToPng
 */
class PdfToPng
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