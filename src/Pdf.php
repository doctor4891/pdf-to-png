<?php
namespace pdfToPng;

abstract class Pdf
{
    public $pdfPath;

    public $page;

    public function __construct($pdfPath, $page = 1)
    {
        $this->pdfPath = $pdfPath;

        $this->page = $page;
    }

    public function getPdfLocalPath(){
        $pdfLocalPath = Config::$storage . '/' . $this->getPdfBasename();
        if (file_exists($pdfLocalPath)){
            return $pdfLocalPath;
        }else{
            if(copy($this->pdfPath, $pdfLocalPath))
            {
                return $pdfLocalPath;
            }else{
                die('Cannot get Pdf');
            }
        }
    }

    public function getPdfBasename(){
        return basename(explode('?', $this->pdfPath)[0]);
    }

    public function setImgPath($path)
    {
        $goodPath = $path;

        for ($i = 0; $i < 3; $i++) {
            if (file_exists($path) !== false) {
                break;
            } else {
               // $path = str_replace('-', "-0", $path);
                $path = preg_replace('~-([0-9]+)\.png~', '-0$1.png', $path);
            }
        }
        if (file_exists($path)) {
            if (rename($path, $goodPath)) {
                return $goodPath;
            }
        }

        return $_SERVER['DOCUMENT_ROOT'] . "/service/noimage.png";
    }

    abstract function convert();
}