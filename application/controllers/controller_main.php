<?php

class Controller_Main extends Controller
{
    public function __construct()
    {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('main_view.php', 'template_view.php');
    }

    public function index()
    {
        $this->pageData['title'] = "Вход в личный кабинет";
        if (!empty($_POST)) {
            $action = $_POST['action'];
            switch ($action) {
                case 'login':
                    if (!$this->login()) {
                        $this->pageData['error'] = "Неправильный логин или пароль";
                    }
                    break;

                case 'register':
                    if ($this->register()) {
                        $this->pageData['registerMsg'] = "Вы успешно зарегистрированы. Пожалуйста, авторизуйтесь";
                    } else {
                        $this->pageData['registerMsg'] = "Произошла ошибка во время регистрации";
                    }
                    break;
            }
        }

        $this->view->render($this->pageTpl, $this->pageData);
    }


    public function login()
    {

        if (!$this->model->checkUser()) {
            return false;
        }
    }

    public function register()
    {
        if (!empty($_POST) && !empty($_POST['fullName']) && !empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $regUser = $_POST['fullName'];
            $regLogin = $_POST['login'];
            $regEmail = $_POST['email'];
            $regPassword = md5($_POST['password']);
            $this->model->registerNewUser($regUser, $regLogin, $regEmail, $regPassword);
            return true;
        } else {
            $this->pageData['registerMsg'] = "Вы заполнили не все поля";
            return false;
        }
    }
}