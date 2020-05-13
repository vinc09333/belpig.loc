<?php


namespace Engine;


use Engine\DI\DI;

abstract class Controller
{
    /**
     * @var DI
     */
    protected $di;
    protected $db;
    protected $view;
    protected $auth;
    protected $request;
    //protected $config;
    public $queryBuilder;
    /**
     * Controller constructor.
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
        $this->db = $this->di->get('db');
        $this->view = $this->di->get('view');
        $this->auth = $this->di->get('auth');
        $this->queryBuilder = $this->di->get('queryBuilder');
        $this->request = $this->di->get('request');
        //$this->config = $this->di->get('config');
    }
}