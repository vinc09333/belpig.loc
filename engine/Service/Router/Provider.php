<?php


namespace Engine\Service\Router;


use Engine\Core\Router\Router;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'router';
    /**
     * @inheritDoc
     */
    function init()
    {
        $router = new Router('http://belpig.loc/');
        $this->di->set($this->serviceName, $router);
    }
}