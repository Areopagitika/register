<?php

class Users extends Model
{
    protected $table = "users";

    public function prepareUser($params)
    {
        return array(
            "name" => $params["name"],
            "family" => $params["family"],
            "email" => $params["email"],
            "phone" => $params["phone"],
            "address" => $params["address"],
            "password" => hash_password($params["password"], 'oop')
        );
    }

    public function validate_rules()
    {
        return array(
            "name" => array(
                "required" => array(
                    "message" => 'Поле Имя не заполнено'
                )
            ),
            "family" => array(
                "required" => array(
                    "message" => 'Поле Фамилия не заполнено'
                )
            ),
            "email" => array(
                "required" => array(
                    "message" => 'Поле E-mail не заполнено'
                ),
                "email" => array(
                    "message" => 'Необходимо ввести e-mail в формате name@domain.com'

    ),
            ),
            "phone" => array(
                "required" => array(
                    "message" => 'Поле Телефон не заполнено'
                ),
                "regexp" => array(
                    "pattern" => '/^[+7][0-9]{10}/',
                    "message" => 'Введите телефон в нужном формате'
                )
            ),
            "address" => array(
                "required" => array(
                    "message" => 'Поле Адрес не заполнено'
                )
            ),
            "password" => array(
                "required" => array(
                    "message" => 'Поле Пароль не заполнено'
                ),
                "regexp" => array(
                    'pattern' => '/^[+7][0-9]{10}/',
                    "message" => ''
                )
            ),
            "confirm_password" => array(
                "required" => array(
                    "message" => 'Поле Подтверждение пароля не заполнено'
                ),
                "equalTo" => array(
                    "field" => 'password',
                    "message" => 'Значение полей Пароль и Подтверждение пароля не совпадают'
                )
            )
        );
    }

    public function addUser($params)
    {
        $rules = $this->validate_rules();
        $validate = $this->validate($params, $rules);
        if(!$validate) {
            $table = $this->table;
            $data = $this->prepareUser($params);
            $result = $this->addToTableDB($table, $data);
            if($result) {
                $output = array("success" => true);
            } else {
                $output = array("error" => true);
            }
        } else {
            $output = array("error" => true, "fields" => $validate);
        }

        $output = json_encode($output);
        return $output;
    }

    public function getUsers()
    {
        $output = $this->getResult($this->params);
        return $output;
    }
}