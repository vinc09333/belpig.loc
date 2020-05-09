<?php


namespace Engine;

class Cms
{
    /**
     * @var DI
     */
    private $di;
    public $router;
    public $db;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
        $this->db = $this->di->get('db');
    }

    /**
     *
     */
    public function run()
    {
        //$this->router->add('home', '/', 'HomeController:index');
        //$this->router->add('user', '/user/{id}', 'UserController:index');
        //print_r($this->db->query("SELECT * FROM `user`"));
        print_r($this->di);
    }
}