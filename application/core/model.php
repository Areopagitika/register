<?php

class Model
{
    protected $db;
    protected $table;

    public function __construct()
    {
        $this->db = DB::instance();
    }

    public function addToTableDB($table, $params)
    {
        $keys = array_keys($params);
        $name_keys = implode(', ', $keys);
        $placeholder_keys = implode(', :', $keys);
        $placeholder_keys = ':' . $placeholder_keys;

        $sql = 'INSERT INTO ' . $table . ' (' . $name_keys . ') VALUES (' . $placeholder_keys . ')';

        $stmt = $this->db->prepare($sql);
        foreach ($params as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        $output = $stmt->execute();

        return $output;
    }

    public function getResult($table)
    {
        $sql = 'SELECT * FROM ' . $table;
        $stmt = $this->db->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function validate($params, $rules_set) {
        $errors = array();

        foreach ($rules_set as $name => $rules) {
            foreach ($rules as $rule_name => $rule) {
                switch ($rule_name) {
                    case 'required':
                        if($rule) {
                            if (empty($params[$name])) {
                                $errors[$name][] = $rule["message"];
                            }
                        }
                        break;

                    case 'email':
                        if($rule) {
                            if(!checkEmail($params[$name])) {
                                $errors[$name][] = $rule["message"];
                            }
                        }
                        break;

                    case 'regexp':
                        if (!preg_match($rule['pattern'], $params[$name])) {
                            $errors[$name][] = $rule["message"];
                        }
                        break;

                    case 'equalTo':
                        if($params[$name] != $params[$rule['field']]) {
                            $errors[$name][] = $rule["message"];
                        }
                        break;
                }
            }
        }

        return $errors;

//        foreach ($params as $key => $value) {
//            $is_valid = $this->isValid($field, $value);
//
//            if($is_valid) {
//                $output["fields"][$field] = checkData($value);
//            } else {
//                $output["error"] = false;
//                $output["error"]["fields"][$field] = $is_valid;
//            }
//        }
//
//        if (empty($error["fields"])) {
//
//        } else {
//            $error = json_encode($error);
//            return $error;
//        }

    }

    public function isValid($name, $value)
    {
        $output = "";

        if (!isset($value) || empty($value)) {
            $output = "Поле обязательно для заполнения";
            return false;
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
        }

        return $output;
    }
}