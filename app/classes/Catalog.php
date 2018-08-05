<?php

class Catalog
{
    const CATALOGS_DIR = 'system/catalogs/';

    public $name;
    private $directory;
    private $images;

    function __construct($name)
    {
        $this->name = $name;
        $this->directory = self::CATALOGS_DIR . $name . '/';
        $this->images = glob($this->directory . '*.{jpg,png}', GLOB_BRACE);
    }

    public function images()
    {
        return $this->images;
    }

    public static function default()
    {
        foreach (glob(self::CATALOGS_DIR . '*') as $path) {
            if (is_dir($path)) {
                return basename($path);
            }
        }

        return false;
    }
}
