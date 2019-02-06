<?php

namespace App\Models;


class Submissao {


    protected $db;

    public function __construct (\PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $query = "Select * from admins";
        return $this->db->query($query);
    }

    public function fetchAllMultiple()
    {
        $stmt = $this->db->prepare('SELECT * FROM submissao order by data');
        
            $stmt->execute();
            /* if($stmt->execute() === false){
                echo "<pre>";
                print_r($stmt->errorInfo());
            } */
            $class = new \App\Models\submissaoBean;
            $class = get_class($class);
            return $stmt->fetchAll($this->db::FETCH_CLASS, $class);

    }

    public function find($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM submissao WHERE id = :id');
        
            $stmt->execute(array(
                ':id' => $id
      
              ));
            /* if($stmt->execute() === false){
                echo "<pre>";
                print_r($stmt->errorInfo());
            } */
            return $stmt->fetch();

    }

    public function findMultiplo($data1, $data2)
    {
        $stmt = $this->db->prepare('SELECT * FROM submissao WHERE data BETWEEN CAST(:data1 AS DATE) and  CAST(:data2 AS DATE)');
        
            $stmt->execute(array(
                ':data1' => $data1,
                ':data2' => $data2

              ));
            /* if($stmt->execute() === false){
                echo "<pre>";
                print_r($stmt->errorInfo());
            } */
            $class = new \App\Models\submissaoBean;
            $class = get_class($class);
            return $stmt->fetchAll($this->db::FETCH_CLASS, $class);

    }



    public function insert($nome, $email, $opt, $dir)
    {
        $stmt = $this->db->prepare('INSERT INTO submissao (nome,email,tipo,arquivo,data) VALUES(:nome,:email,:tipo,:arquivo,NOW())');
        
            $stmt->execute(array(
                ':nome' => $nome,
                ':email' => $email,
                ':tipo' => $opt,
                ':arquivo' => $dir
      
              ));
              /*  echo "<pre>";
                print_r($stmt->errorInfo());
                */
    }
}