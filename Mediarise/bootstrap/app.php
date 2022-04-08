<?php

use Mediarise\AgileFramework\Component\Application;

$app = new Application($_ENV['APP_BASE_PATH'] ?? dirname(__DIR__));

return $app;