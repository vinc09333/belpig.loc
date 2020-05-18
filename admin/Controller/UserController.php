<?php


namespace Admin\Controller;


class UserController extends AdminController
{
    public function listing()
    {
        $this->load->model('User');

        $this->data['users'] = $this->model->user->getUsers();

        $this->view->render('users/list', $this->data);
    }
    public function create()
    {
        $this->view->render('users/create');
    }
    public function edit($id)
    {
        $this->load->model('User');

        $this->data['user'] = $this->model->user->getUserData($id);

        $this->view->render('users/edit', $this->data);
    }
    public function add()
    {
        $this->load->model('User');

        $params = $this->request->post;

        if (isset($params['email'])) {
            $userId = $this->model->user->createUser($params);
            echo $userId;
        }
    }
    public function update()
    {
        $this->load->model('User');

        $params = $this->request->post;

        if (isset($params['password'])) {
            $userId = $this->model->user->updateUser($params);
            echo $userId;
        }
    }
    public function delete()
    {
        $this->load->model('User');
        $params = $this->request->post;
        if(isset($params['id'])) {
            $userId = $this->model->user->deleteUser($params);
            echo  $userId;
        }
    }

}