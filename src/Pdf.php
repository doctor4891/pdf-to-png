<?php
namespace pdfToPng;

/**
 * Class Pdf
 * @package pdfToPng
 */
abstract class Pdf
{
    /**
     * @var
     */
    public $pdfPath;

    /**
     * @var int
     */
    public $page;

    /**
     * Pdf constructor.
     * @param $pdfPath
     * @param int $page
     */
    public function __construct($pdfPath, $page = 1)
    {
        $this->pdfPath = $pdfPath;

        $this->page = $page;
    }

    /**
     * @return string
     */
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

    /**
     * @return string
     */
    public function getPdfBasename(){
        return basename(explode('?', $this->pdfPath)[0]);
    }

    /**
     * @param $path string
     * @return string
     */
    public function setImgPath($path)
    {
        $goodPath = $path;

        for ($i = 0; $i < 3; $i++) {
            if (file_exists($path) !== false) {
                break;
            } else {
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

    /**
     * @return mixed
     */
    abstract function convert();
}