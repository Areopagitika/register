<?php

class Controller_Reg extends Controller {

    function __construct()
    {
        $this->model = new Model_Reg();
        $this->view = new View();
    }

    public function action_index() {
        $this->register();
    }

    public function validate_reg() {
        return;
    }

    public function register() {
        if($this->validate_reg()) {
            return;
        }
        $name = $_POST['name'];
        $family = $_POST['family'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $regArr = array(
            "name" => $name,
            "family" => $family,
            "email" => $email,
            "phone" => $phone,
            "address" => $address
        );

        $this->model->reg_user($regArr);
    }
}