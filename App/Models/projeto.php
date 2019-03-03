<?php

namespace App\Models;


class Projeto {


    protected $db;

    public function __construct (\PDO $db)
    {
        $this->db = $db;
    }

    public function insert($nome, $horas, $formacao, $perfil, $status, $nivel, $congelado)
    {
        $stmt = $this->db->prepare('INSERT INTO projeto (nome,horas,formacao,perfil,status,nivel,congelado) 
                                    VALUES(:nome,:horas,:formacao,:perfil,:status,:nivel,:congelado)');    
            $stmt->execute(array(
                ':nome' => $nome,
                ':horas' => $horas,
                ':formacao' => $formacao,
                ':perfil' => $perfil,
                ':status' => $status,
                ':congelado' => $congelado,
                ':nivel' => $nivel    
              ));
               echo "<pre>";
                print_r($stmt->errorInfo()); 
        
    }


    public function fetchAll()
    {
        $query = "Select * from projeto";
        return $this->db->query($query);
    }

    public function congelar($id_projeto)
    {
        $stmt = $this->db->prepare("UPDATE projeto SET congelado=1 where cpf ='$id_projeto'");
            $stmt->execute();
    }

    public function descongelar($id_projeto)
    {
        $stmt = $this->db->prepare("UPDATE projeto SET congelado=0 where cpf ='$id_projeto'");
            $stmt->execute();
    }

    public function findNivel($user)
    {
        $stmt = $this->db->query("SELECT nivel from usuarios where cpf ='$user'");
        $nivel = $stmt->fetchColumn();
        return $nivel;
    }
    public function findRowsLogin($user, $pass)
    {
        $stmt = $this->db->prepare('select * from usuarios where cpf = :user and senha = (SELECT SHA2(:password, 256)); ');
        
            $stmt->execute(array(
                ':user' => $user,
                ':password' => $pass
              ));        
            return $stmt->rowCount();
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

    public function find($cpf)
    {
        $stmt = $this->db->prepare('SELECT * FROM usuarios WHERE cpf = :cpf');
        
            $stmt->execute(array(
                ':cpf' => $cpf
      
              ));
            /* if($stmt->execute() === false){
                echo "<pre>";
                print_r($stmt->errorInfo());
            } */

            $class = new \App\Models\usuarioBean;
            $class = get_class($class);
            return $stmt->fetchAll($this->db::FETCH_CLASS, $class);
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

}