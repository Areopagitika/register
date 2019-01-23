<?php

function hash_password($password, $salt)
{
    $hash = md5($password . '+' . $salt);
    return $hash;
}

function checkData($value) {
    $output = htmlspecialchars($value);
    $output = strip_tags($value);
    return $output;
}