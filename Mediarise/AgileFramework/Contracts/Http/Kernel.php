<?php

namespace Mediarise\AgileFramework\Contracts\Http;

interface Kernel
{
    public function bootstrap();

    public function handle($request);

    public function terminate($request, $response);

    public function getApplication();
}