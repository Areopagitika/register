<?php

class DB
{
    public static function instance()
    {
        $output = new PDO('mysql:dbname=' . DB .';host=' . HOST, USER, PASS);
        return $output;
    }
}