<?php

class Users extends Model
{
    protected $table = "users";
    protected $params = array('name', 'family', 'email', 'phone', 'address', 'password');

    public function addUser($params) {
        if($this->validate($params))
        {
            if(!$this->addToTableDB($params)) {
                return false;
            }
        } else {
            return false;
        }
    }
    public function getUsers() {
        $output = $this->getResult($this->params);
        return $output;
    }
}