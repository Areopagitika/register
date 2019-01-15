<?php

class Model_Main extends Model
{
    public function get_users()
    {
        $data = array();
        $stmt_users = $this->db->query("SELECT * FROM users");
        $items_users = $stmt_users->fetchAll(PDO::FETCH_ASSOC);
        foreach ($items_users as $item) {
            $data[] = array(
                "id" => $item["id"],
                "name" => $item["name"],
                "family" => $item["family"],
                "email" => $item["email"],
                "phone" => $item["phone"],
                "address" => $item["address"]
            );
        }
        return $data;
    }
}