<?php


namespace Cms\Controller;

class HomeController extends CmsController
{
    public $auth;
    public function index()
    {
        $data = ['name'=>'Artem<br>'];
        $this->view->render('index', $data);
        //print_r($this->auth->authorize('am.fesenko', 'vInc093290193'));
        print_r($this->request);


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