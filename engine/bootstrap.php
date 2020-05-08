<?php

use Engine\Cms;
use Engine\DI\DI;

try{
    /**
     * Dependency Injection
     */
    $di = new DI();
    /**
     * @RUN_CMS
     */
    $cms = new Cms($di);
    $cms->run();
}catch (\ErrorException $e)
{
    echo $e->getMessage();
}