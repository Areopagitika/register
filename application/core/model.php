<?php

class Model
{
    protected $db = null;

    public function __construct()
    {
        $this->db = DB::connToDB();
    }

    //TODO что за каша? Почему в общей модели ты получаешь частную (user)? У каждой сущьности должна быть своя модель.
    public function get_users()
    {

    }

    public function reg_user() {

    }

    //TODO Почитай что такое хенлперы. Вот этой херни тут быть не должно.
    public function hash_password($password, $salt) {
        $hash = md5($password . '+' . $salt);
        return $hash;
    }
}