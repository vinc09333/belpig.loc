<?php


namespace Admin\Controller;


use Engine\Controller;

class AdminController extends Controller
{
    /**
     * HomeController constructor.
     * @param  \Engine\DI\DI $di
     */
    public function __construct($di)
    {
        parent::__construct($di);
    }
    public function index()
    {
        echo 'Index Page';
    }
}