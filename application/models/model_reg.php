<?php

class Model_Reg extends Model
{
    public function registerNewUser($regArray)
    {
        $sql = "INSERT INTO users(name, family, email, phone, address, password)
				VALUES (:name, :family, :email, :phone, :address, :password)";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":name", $regArray['name'], PDO::PARAM_STR);
        $stmt->bindValue(":family", $regArray['family'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $regArray['email'], PDO::PARAM_STR);
        $stmt->bindValue(":phone", $regArray['phone'], PDO::PARAM_STR);
        $stmt->bindValue(":address", $regArray['address'], PDO::PARAM_STR);
        $stmt->bindValue(":password", $regArray['password']);
        $stmt->execute();
    }
}