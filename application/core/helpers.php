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

function checkEmail($value) {
    $output = filter_var($value, FILTER_VALIDATE_EMAIL);
    return $output;
}