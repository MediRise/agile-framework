<?php

namespace Mediarise\AgileFramework\Component;

class Application
{

    /**
     * Base path Application
     *
     * @var
     */
    protected string $basePath;

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
    public function setBasePath($basePath): static
    {
        $this->basePath = rtrim($basePath, '\/');

        return $this;
    }

    /**
     * @param string $path
     * @return string
     */
    public function getBasePath(string $path = ''): string
    {
        if ($path) {
            return $this->basePath . DIRECTORY_SEPARATOR . $path;
        }

        return $this->basePath;
    }
}