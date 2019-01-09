<?php

class DB
{
    const USER = "study";
    const PASS = "8BNhA8lPFsX4";
    const HOST = "localhost";
    const DB = "akondratievoop_study";

    public static function connToDB() {
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        return $conn;
    }
}