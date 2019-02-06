<?php

namespace App\Models;


class Registros {


    protected $db;

    public function __construct (\PDO $db)
    {
        $this->db = $db;
    }

    public function findStatus()
    {
        $stmt = $this->db->prepare('SELECT `situacao` FROM `registros` order by data desc limit 1');
            $stmt->execute();        
            return $stmt->fetch();
    }

    public function insertFecha()
    {
        $stmt = $this->db->prepare('INSERT INTO `registros`(`user`, `data`, `situacao`) VALUES (:user,now(),0)');      
        $stmt->execute(array(
            ':user' => $_SESSION['usuario']
          ));       
        return $stmt->fetch();
    }
    public function insertAbre()
    {
        $stmt = $this->db->prepare('INSERT INTO `registros`(`user`, `data`, `situacao`) VALUES (:user,now(),1)');   
        $stmt->execute(array(
            ':user' => $_SESSION['usuario']
          ));      
        return $stmt->fetch();

    }
}