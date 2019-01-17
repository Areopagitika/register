<?php

class Controller_Reg extends Controller
{

    function __construct()
    {
        $this->model = new Model_Reg();
        $this->view = new View();
    }

    public function action_index()
    {
        return $this->validate_reg();
        //$this->register();
    }

    public function validate_reg()
    {
        $error = array("error" => true);

        $arrFields = array(
            "name" => $_POST["name"],
            "family" => $_POST["family"],
            "email" => $_POST["email"],
            "phone" => $_POST["phone"],
            "address" => $_POST["address"],
            "password" => $_POST["password"],
            "confirm_password" => $_POST["confirm_password"]
        );

        foreach ($arrFields as $field => $value) {
            if (!isset($value) || empty($value)) {
                $error["fields"][$field] = "Поле обязательно для заполнения";
            }

            switch ($field) {
                case 'email':
                    $email = filter_var($value, FILTER_VALIDATE_EMAIL);
                    if (!$email) {
                        $error["fields"]["email"] = "Необходимо ввести e-mail в формате name@domain.com";
                    }
                    break;

                case 'phone':
                    if(preg_match('/^[+7][0-9]{10}/', $value)) {
                        $error["fields"][$field] = "Введите телефон в нужном формате";
                    }
                    break;

                case 'password':
                    break;

                case 'confirm_password':
                    if ($arrField["password"] != $value) {
                        $error["fields"]["confirm_password"] = $value . " - " . $arrFields["password"] . "Значения полей Пароль и  Подтверждение пароля должны совпадать";
                    }
                    break;
            }
        }

        $error = json_encode($error);
        die($error);

//        if(isset($_POST['name']) && !empty($_POST['name'])) {
//            $name = htmlspecialchars($_POST['name']);
//            $name = strip_tags($name);
//        } else {
//            $error = array(
//                "status" => true,
//                "message" => "Поле Имя должно быть заполнено"
//            );
//
//            echo "Поле Имя должно быть заполнено";
//            return false;
//        }
//        if(isset($_POST['family']) && !empty($_POST['family'])) {
//            $family = htmlspecialchars($_POST['family']);
//            $family = strip_tags($family);
//        } else {
//            die("Поле Фамилия должно быть заполнено");
//        }
//        if(isset($_POST['email']) && !empty($_POST['email'])) {
//            $email = htmlspecialchars($_POST['email']);
//            $email = strip_tags($email);
//            $email = filter_var($email, FILTER_VALIDATE_EMAIL);
//            if(!$email) die("Необходимо ввести e-mail в формате name@domain.com");
//        } else {
//            die("Поле E-mail должно быть заполнено");
//        }
//        if(isset($_POST['phone']) && !empty($_POST['phone'])) {
//            $phone = htmlspecialchars($_POST['phone']);
//            $phone = strip_tags($phone);
//        } else {
//            die("Поле Телефон должно быть заполнено");
//        }
//        if(isset($_POST['address']) && !empty($_POST['address'])) {
//            $address = htmlspecialchars($_POST['address']);
//            $address = strip_tags($address);
//        } else {
//            die("Поле Адрес должно быть заполнено");
//        }
//        if(isset($_POST['password']) && !empty($_POST['password'])) {
//            $password = htmlspecialchars($_POST['password']);
//            $password = strip_tags($password);
//        } else {
//            die("Поле Пароль должно быть заполнено");
//        }
//        if(isset($_POST['confirm_password']) && !empty($_POST['confirm_password'])) {
//            $confirm_password = $_POST['confirm_password'];
//            $confirm_password = strip_tags($confirm_password);
//            if($confirm_password != $password) {
//                die("Значения полей Пароль и  Подтверждение пароля должны совпадать");
//            }
//        } else {
//            die("Поле для подтверждения пароля должно быть заполнено");
//        }
//        $data_vars = array("name", "family", "email", "phone", "address", "password");
//        $data = compact($data_vars);
//        return $data;
    }

    public function register()
    {
        $regArr = $this->validate_reg();
        $regArr['password'] = $this->model->hash_password($regArr['password'], "reg");
        $this->model->reg_user($regArr);
    }
}