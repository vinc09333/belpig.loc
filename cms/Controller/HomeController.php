<?php


namespace Cms\Controller;


class HomeController extends CmsController
{
    public function index()
    {
        echo 'Index Page';
    }

    public function news($id = null)
    {
        if ($id != null){
            echo $id;
        }
        else {
            echo 'News Page';
        }
    }
}