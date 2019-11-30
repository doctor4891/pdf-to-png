<?php

namespace pdfToPng;
class SinglePage extends Pdf
{
    public function convert(){
        $localPath = $this->getPdfLocalPath();
        $localImageBasename = Config::$storage . '/' . basename($this->getPdfBasename(), '.pdf');
        $command = 'pdftoppm -r 100 -f ' . $this->page . ' -l ' . $this->page . ' -png ' . $localPath . ' ' . $localImageBasename;
        exec($command . ' 2>&1', $output);

        $localImagePath = $this->setImgPath($localImageBasename . '-' . $this->page . '.png');

        return $localImagePath;
    }
}