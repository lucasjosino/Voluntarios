<?php

namespace App\Controllers;

use SON\Controller\Action;
use \App\Models\submissao;

class Index extends Action {

    public function index(){
        $submissao = \SON\DI\Container::getClass("Submissao");
        $submissoes = $submissao->fetchAll();
        $this->view->submissoes = $submissoes;
        $this->render('submissao');
    }

    public function empresa(){
        include '../App/Views/empresa.php';
    }

}