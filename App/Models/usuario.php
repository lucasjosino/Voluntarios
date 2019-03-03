<?php

namespace App\Models;


class Usuario {


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

    public function congelar($cpf)
    {
        $stmt = $this->db->prepare("UPDATE usuarios SET congelado=1 where cpf ='$cpf'");
            $stmt->execute();
    }

    public function descongelar($cpf)
    {
        $stmt = $this->db->prepare("UPDATE usuarios SET congelado=0 where cpf ='$cpf'");
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



    public function insert($nome, $email, $whatsapp, $telefone, $cpf, $rg, $estado, $cidade, $complemento, $horas, $endereco, $formacao, $lattes, $obs, $senha)
    {
        $senha = hash('sha256',$senha);
        $stmt = $this->db->prepare('INSERT INTO usuarios (nome,email,whatsapp,telefone,cpf,rg,estado,cidade,complemento,horas,endereco,formacao,lattes,obs,senha) 
                                    VALUES(:nome,:email,:whatsapp,:telefone,:cpf,:rg,:estado,:cidade,:complemento,:horas,:endereco,:formacao,:lattes,:obs,:senha)');    
            $stmt->execute(array(
                ':nome' => $nome,
                ':email' => $email,
                ':whatsapp' => $whatsapp,
                ':telefone' => $telefone,
                ':cpf' => $cpf,
                ':rg' => $rg,
                ':estado' => $estado,
                ':cidade' => $cidade,
                ':complemento' => $complemento,
                ':horas' => $horas,
                ':endereco' => $endereco,
                ':formacao' => $formacao,
                ':lattes' => $lattes,
                ':obs' => $obs,
                ':senha' => $senha    
              ));
               /*echo "<pre>";
                print_r($stmt->errorInfo()); */
        
    }
}