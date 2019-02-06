<?php

namespace App\Models;


class Admins {


    protected $db;

    public function __construct (\PDO $db)
    {
        $this->db = $db;
    }

    public function findRows($user, $pass)
    {
        $stmt = $this->db->prepare('select * from admins where user = :user and password = (SELECT SHA2(:password, 224)); ');
        
            $stmt->execute(array(
                ':user' => $user,
                ':password' => $pass
              ));        
            return $stmt->rowCount();
    }
}