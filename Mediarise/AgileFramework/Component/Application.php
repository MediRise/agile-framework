<?php

namespace Mediarise\AgileFramework\Component;

class Application
{

    /**
     * Base path Application
     *
     * @var
     */
    protected $basePath;

    public function __construct($basePath = null)
    {
        if ($basePath) {
            $this->setBasePath($basePath);
        }
    }

    /**
     * @param $basePath
     * @return $this
     */
    public function setBasePath($basePath)
    {
        $this->basePath = rtrim($basePath, '\/');

        return $this;
    }

    /**
     * @param $path
     * @return string
     */
    public function getBasePath($path = '')
    {
        if ($path) {
            return $this->basePath . DIRECTORY_SEPARATOR . $path;
        }

        return $this->basePath;
    }
}