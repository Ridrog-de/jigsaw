<?php namespace TightenCo\Jigsaw;

use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Str;
use TightenCo\Jigsaw\Filesystem;

class Jigsaw
{
    private $dataLoader;
    private $siteBuilder;

    public function __construct($dataLoader, $siteBuilder)
    {
        $this->dataLoader = $dataLoader;
        $this->siteBuilder = $siteBuilder;
    }

    public function build($source, $dest, $env)
    {
        $siteData = $this->dataLoader->load($source, $env);
        $this->siteBuilder->build($source, $dest, $siteData);
    }
}
