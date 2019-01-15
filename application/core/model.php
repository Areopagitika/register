<?php

class Model
{
    protected $db = null;

    public function __construct()
    {
        $this->db = DB::connToDB();
    }

    public function get_users()
    {

    }

    public function reg_user() {

    }
}