<?php

namespace App\Controllers;

use SON\Controller\Action;
use \App\Models\usuario;

class usuarioController extends Action {

    public function insert(){
            $usuario = \SON\DI\Container::getClass("Usuario");
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $whatsapp = $_POST['whatsapp'];
            $telefone = $_POST['telefone'];
            $cpf = $_POST['cpf'];
            $rg = $_POST['rg'];
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];
            $complemento = $_POST['complemento'];
            $horas = $_POST['horas'];
            $endereco = $_POST['endereco'];
            $formacao = $_POST['formacao'];
            $lattes = $_POST['lattes'];
            $obs = $_POST['obs'];
            $senha = $_POST['senha'];
            //$arq = $_FILES['arquivo']['name'];
            //$ext = pathinfo($arq, PATHINFO_EXTENSION);
            //echo $ext;
            //$dir =  $_SERVER["DOCUMENT_ROOT"];
            //$dir = str_replace("public","",$dir);
            //$dir = $dir . 'App\Arquivos'.'\\'.$email.'.'.$ext;
            //move_uploaded_file($_FILES['arquivo']['tmp_name'],"../App/Arquivos/".$email.'.'.$ext);
            // criar função para gerar verificador de arquivo existente e mudar o nome;
            $usuario->insert($nome,$email,$whatsapp,$telefone,$cpf,$rg,$estado,$cidade,$complemento,$horas,$endereco,$formacao,$lattes,$obs,$senha);
            /*$submissoes = $submissao->fetchAll();
            $this->view->submissoes = $submissoes;*/
            echo "<center><b>Cadastrado com sucesso! Você pode acessar o sistema fazendo login agora.</b></center>";
            $this->render('home');
    }

    public function starter()
    {
        $registros = \SON\DI\Container::getClass("Registros");
        if ($registros->findStatus()['situacao'] != 1)
        {
            $this->render("out");
        }
        else
        {
            $this->render('gerencia_projetos');
        }
        
    }

    public function empresa(){
        include '../App/Views/empresa.php';
    }

}