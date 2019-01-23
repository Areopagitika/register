<?php

class Controller_Users extends Controller
{

    function __construct()
    {
        $this->model = new Users();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }

    public function action_reg()
    {
        $user = $_POST;
        return $this->model->addUser($user);
    }
}