<?php

class Controller_Account extends Controller {
    public function __construct()
    {
        $this->model = new Model_Account();
        $this->view = new View();
    }

    public function action_index()
    {

    }
}