<?php

class Controller_Auth extends Controller
{
    function action_index()
    {
    $this->view->generate('main_view.php', 'template_view.php');
    }
}