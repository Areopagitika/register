<?php

class Model
{
    protected $db;
    protected $table;

    public function __construct()
    {
        $this->db = DB::instance();
    }

    public function addToTableDB($params)
    {
        $keys = array_keys($params);
        $values = array_values($params);

        $keys = implode(', ', $keys);
        $values = implode(', ', $values);

        $sql = 'INSERT INTO ' . $this->table . '(' . $keys . ') VALUES (' . $values . ')';

        $query = $this->db->query($sql);
        if(!$query) {
            return false;
        }
    }

    public function getResult($params)
    {
        $params = implode(', ', $params);
        $sql = 'SELECT ' . $params . ' FROM ' . $this->table;
        $stmt = $this->db->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function validate($params) {
        $output = array();

        foreach ($params as $field => $value) {
            $is_valid = $this->isValid($field, $value);

            if($field == 'confirm_password' && !empty($params["password"])) {
                $values = array(
                    "password" => $params["password"],
                    "confirm_password" => $value
                );
                $is_valid = $this->isValid($field, $values);
            }
            if($is_valid) {
                $output["fields"][$field] = checkData($value);
            } else {
                $output["error"]["status"] = false;
                $output["error"]["fields"][$field] = $is_valid;
            }
        }

        if (empty($error["fields"])) {

        } else {
            $error = json_encode($error);
            return $error;
        }

    }

    public function isValid($name, $value)
    {
        $output = "";

        if (!isset($value) || empty($value)) {
            $output = "Поле обязательно для заполнения";
        }

        switch ($name) {
            case 'email':
                $email = filter_var($value, FILTER_VALIDATE_EMAIL);
                if (!$email) {
                    $output = "Необходимо ввести e-mail в формате name@domain.com";
                }
                break;

            case 'phone':
                if (preg_match('/^[+7][0-9]{10}/', $value)) {
                    $output = "Введите телефон в нужном формате";
                }
                break;

            case 'password':
                break;

            case 'confirm_password':

//                if ($value["password"] != $value["confirm_password"]) {
//                    $output = $value["confirm_password"] . " - " . $value["password"] . "Значения полей Пароль и  Подтверждение пароля должны совпадать";
//                }
               break;
        }

        return $output;
    }
}