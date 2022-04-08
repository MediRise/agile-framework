<?php

use Mediarise\AgileFramework\Component\HttpKernel\Kernel;

require __DIR__.'/../vendor/autoload.php';

return function () {
    return new Kernel();
};