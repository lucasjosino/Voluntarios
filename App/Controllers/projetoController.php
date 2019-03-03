<?php

namespace App\Controllers;

use SON\Controller\Action;
use App\Models\usuario;
use App\Models\projeto;

class projetoController extends Action {



    public function insert() {
        $projeto = \SON\DI\Container::getClass("projeto");
        $nome = $_POST['nome'];
        $responsavel = $_POST['responsavel'];
        $nivel = $_POST['nivel'];
        $status = $_POST['status'];
        $perfil = $_POST['perfil'];
        $horas = $_POST['horas'];
        $formacao = $_POST['formacao'];
        $projeto->insert($nome,$horas,$formacao,$perfil,$status,$nivel,$congelado);
        $this->render('dashboard');
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

    public function getprojeto() {
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

    // gera erro em caso de login falho
    public function erro ()
    {
            $this->render('erro');
    }

}