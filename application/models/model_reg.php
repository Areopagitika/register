<?php

class Model_Reg extends Model
{
    public function reg_user($data)
    {
        $sql = "INSERT INTO users(name, family, email, phone, address, password)
				VALUES (:name, :family, :email, :phone, :address, :password)";

        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":name", $data['name'], PDO::PARAM_STR);
        $stmt->bindValue(":family", $data['family'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $data['email'], PDO::PARAM_STR);
        $stmt->bindValue(":phone", $data['phone'], PDO::PARAM_STR);
        $stmt->bindValue(":address", $data['address'], PDO::PARAM_STR);
        $stmt->bindValue(":password", $data['password']);
        $stmt->execute();
    }
}