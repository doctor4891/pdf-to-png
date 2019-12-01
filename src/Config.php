<?php

namespace pdfToPng;

/**
 * Class Config
 * @package pdfToPng
 */
class Config
{
    /**
     * You can config to you preferable storage path. The permission must be 777
     * @var string
     */
    public static $storage = __DIR__ . '/storage';

    public static function setStorage($path){
        self::$storage = $path;
    }
}