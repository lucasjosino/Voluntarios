<?php

namespace App\Controllers;

use SON\Controller\Action;
use \App\Models\submissao;

class submissaoController extends Action {

    public function insert(){
            $submissao = \SON\DI\Container::getClass("Submissao");
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $opt = $_POST['optradio'];
            $arq = $_FILES['arquivo']['name'];
            $ext = pathinfo($arq, PATHINFO_EXTENSION);
            echo $ext;
            $dir =  $_SERVER["DOCUMENT_ROOT"];
            $dir = str_replace("public","",$dir);
            $dir = $dir . 'App\Arquivos'.'\\'.$email.'.'.$ext;
            move_uploaded_file($_FILES['arquivo']['tmp_name'],"../App/Arquivos/".$email.'.'.$ext);
            // criar função para gerar verificador de arquivo existente e mudar o nome;
            $submissao->insert($nome,$email,$opt,$dir);
            /*$submissoes = $submissao->fetchAll();
            $this->view->submissoes = $submissoes;*/
            echo "<center><b>Arquivo enviado com sucesso !</b></center>";
            $this->render('submissao');
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