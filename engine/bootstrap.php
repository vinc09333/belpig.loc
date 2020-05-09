<?php

use Engine\Cms;
use Engine\DI\DI;
require_once __DIR__ . "/../vendor/autoload.php";
try{
    /**
     * Dependency Injection
     */
    $di = new DI();
    $services = require __DIR__ . '/Config/Service.php';
    /**
     * Init Service
     */
    foreach ($services as $service)
    {
        $provider = new $service($di);
        $provider->init();
    }
    /**
     * @RUN_CMS
     */
    $cms = new Cms($di);
    $cms->run();
}catch (\ErrorException $e)
{
    echo $e->getMessage();
}