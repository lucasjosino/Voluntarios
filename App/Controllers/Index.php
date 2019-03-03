<?php

namespace App\Controllers;

use SON\Controller\Action;
use \App\Models\submissao;

class Index extends Action {

    public function index(){
        $this->render('home');
    }

    public function cadastroVoluntario(){
        $this->render('cadastro_voluntario');
    }

}