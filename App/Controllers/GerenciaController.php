<?php

namespace App\Controllers;

use SON\Controller\Action;
use App\Models\submissao;
use App\Models\usuario;

class gerenciaController extends Action {

    // inicia a página
    public function starter() {
        $submissao = \SON\DI\Container::getClass("Submissao");
        $listUser = $submissao->fetchAllMultiple();
        //$this->view->listUser = $listUser;
        //$this->render('gerencia');
        $this->render('dashboard');
    }

    public function voluntario() {
        $this->render('voluntario');
    }

    public function cadastroProjeto() {
        $this->render('cadastro_projeto');
    }

     public function listprojetosativos() {
        $this->render('list_projetos');
    }

    public function listprojetoscongelados() {
        $this->render('list_projetos');
    }

    public function congelarv() {
        $usuario = \SON\DI\Container::getClass("usuario");
        $usuario->congelar($_GET['q']);
        $this->view->voluntario = ($usuario->find($_GET["q"])[0]);
        $this->render('voluntario');
    }

    public function descongelarv() {
        $usuario = \SON\DI\Container::getClass("usuario");
        $usuario->descongelar($_GET['q']);
        $this->view->voluntario = ($usuario->find($_GET["q"])[0]);
        $this->render('voluntario');
    }

    public function getvoluntario() {
        $usuario = \SON\DI\Container::getClass("usuario");
        $this->view->voluntario = ($usuario->find($_GET["q"])[0]);
        $this->render('voluntario');
    }
    // inicia a página
    public function projeto() {
        $this->render('projeto');
    }

    // inicia a página
    public function gerenciaProjeto() {
        $this->render('gerencia_projetos');
    }

    // inicia a página
    public function starterUser() {
        $submissao = \SON\DI\Container::getClass("Submissao");
        $listUser = $submissao->fetchAllMultiple();
        //$this->view->listUser = $listUser;
        //$this->render('gerencia');
        $this->render('dashboard_user');
    }

    // inicia a página
    public function tradeSub() {
        $registros = \SON\DI\Container::getClass("Registros");
        if ($registros->findStatus()['situacao'] != 1)
        {
            $registros->insertAbre();
            echo "<center><b>as submissões foram abertas!</b></center>";
        }
        else
        {
            $registros->insertFecha();
            echo "<center><b>as submissões foram fechadas!</b></center>";
        }
        $this->render('gerencia');
    }

    // gera erro em caso de login falho
    public function erro ()
    {
            $this->render('erro');
    }

    // faz o login no sistema
    public function login(){
        $user = $_POST['user'];
        $senha = $_POST['pass'];
        // faz a instancia da classe especificada pelo nome
        $usuario = \SON\DI\Container::getClass("Usuario");
        // testa o login do usuario
        if ($usuario->findRowsLogin($user,$senha) > 0)
        {
            echo $usuario->findNivel($user);
            if ($usuario->findNivel($user) != 0)
            {
                $_SESSION['usuario'] = $user;
                header("Location:dashboard");
            }
            else
            {
                $_SESSION['usuario'] = $user;
                header("Location:dashboard_user");
            }
                
        }
        else
        {
            echo "<center><b>Os dados do login estão errados!</b></center>";
           $this->render('home');
           
        }
    }

    // faz log-out do sistema
    public function sair(){
        session_destroy();
        header("Location:/");
        session_start();
    }

    // baixa o arquivo especificado
    public function download(){
        $id = $_GET['id'];
        $submissao = \SON\DI\Container::getClass("Submissao");
        $id = $submissao->find($id)['arquivo'];
        $arquivo = $id;
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment');
        header('Pragma: public');
	    header("Content-Type: application/octetstream");
        header("Content-Disposition: attachment; filename=" . basename($arquivo));
        header("Expires: 0");
        header('Cache-Control: must-revalidate');
        header("Content-Length: " . filesize($arquivo));
        readfile($arquivo);   
    }

    // baixa multiplos arquivos de um periodo
    public function downloadMultiplo(){
        $submissao = \SON\DI\Container::getClass("Submissao");
        $date1 = $_POST['d1'];
        $date2 = $_POST['d2'];
        $id = $submissao->findMultiplo($date1, $date2);
        $zip = new \ZipArchive();
        $dir =  $_SERVER["DOCUMENT_ROOT"];
        $dir = str_replace("public","",$dir);
        $dir = $dir . 'App\Arquivos'.'pacote';
        $zip->open($dir,\ZIPARCHIVE::CREATE);
        $tam = 0;
        foreach ($id as $x)
        {
            $tam += filesize($x->arquivo); 
            $zip->addFile($x->arquivo,$x->arquivo);
        }
        $zip->close();
        header('Content-Description: File Transfer');
        header('Content-Type: application/zip');
        header('Content-Disposition: attachment');
        header('Content-Length:'.$tam);
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        readfile($dir);
        $this->render('gerencia');  
    }

}