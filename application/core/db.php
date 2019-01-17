<?php

class DB
{

    //TODO Настройки БД лучше вынести в конфигурационный файл. При реальном проекте, если придет новый человек, то он будет долго тупить. У тебя все настройки в классах. Так быть не должно. Должно быть централизованное место.
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