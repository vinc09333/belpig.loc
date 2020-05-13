<?php


namespace Engine\Service\QueryBuilder;


use Engine\Service\AbstractProvider;
use Engine\Core\Database\QueryBuilder;
class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'queryBuilder';
    /**
     * @inheritDoc
     */
    function init()
    {

        $queryBuilder = new QueryBuilder();
        $this->di->set($this->serviceName, $queryBuilder);
    }
}