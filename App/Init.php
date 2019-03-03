<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home'] = array('route'=>'/','controller'=>'index','action'=>'index');
        $ar['descongelarv'] = array('route'=>'/descongelarv','controller'=>'GerenciaController','action'=>'descongelarv');
        $ar['congelarv'] = array('route'=>'/congelarv','controller'=>'GerenciaController','action'=>'congelarv');
        $ar['list_projetos_ativos'] = array('route'=>'/listprojetosativos','controller'=>'GerenciaController','action'=>'listprojetosativos');
        $ar['list_projetos_congelados'] = array('route'=>'/listprojetoscongelados','controller'=>'GerenciaController','action'=>'listprojetoscongelados');
        $ar['projeto'] = array('route'=>'/projeto','controller'=>'GerenciaController','action'=>'projeto');
        $ar['gerencia_projeto'] = array('route'=>'/gerencia_projeto','controller'=>'GerenciaController','action'=>'gerenciaProjeto');
        $ar['voluntario'] = array('route'=>'/voluntario','controller'=>'GerenciaController','action'=>'getvoluntario');
        $ar['cadastro_projeto'] = array('route'=>'/cadastroprojeto','controller'=>'gerenciaController','action'=>'cadastroProjeto');
        $ar['insert_projeto'] = array('route'=>'/insertprojeto','controller'=>'projetoController','action'=>'insert');
        $ar['cadastro_voluntario'] = array('route'=>'/cadastrovoluntario','controller'=>'index','action'=>'cadastroVoluntario');
        $ar['envio_voluntario'] = array('route'=>'/envio_voluntario','controller'=>'usuarioController','action'=>'insert');
        $ar['dashboard_user'] = array('route'=>'/dashboard_user','controller'=>'gerenciaController','action'=>'starterUser');
        $ar['dashboard_adm'] = array('route'=>'/dashboard','controller'=>'gerenciaController','action'=>'starter');
        $ar['empresa'] = array('route'=>'/empresa','controller'=>'index','action'=>'empresa');
        $ar['submissao'] = array('route'=>'/submissao','controller'=>'submissaoController','action'=>'starter');
        $ar['envio'] = array('route'=>'/envio','controller'=>'submissaoController','action'=>'insert');
        $ar['gerencia'] = array('route'=>'/gerencia','controller'=>'gerenciaController','action'=>'starter');
        $ar['download'] = array('route'=>'/download','controller'=>'gerenciaController','action'=>'download');
        $ar['downloadm'] = array('route'=>'/downloadm','controller'=>'gerenciaController','action'=>'downloadMultiplo');
        $ar['login'] = array('route'=>'/login','controller'=>'gerenciaController','action'=>'login');
        $ar['logout'] = array('route'=>'/sair','controller'=>'gerenciaController','action'=>'sair');
        $ar['erro'] = array('route'=>'/erro','controller'=>'gerenciaController','action'=>'erro');
        $ar['trade'] = array('route'=>'/tradeSub','controller'=>'gerenciaController','action'=>'tradeSub');
        $this->setRoutes($ar);
    }

    public static function getDb()
    {
        $db = new \PDO("mysql:host=localhost;dbname=voluntario","root","");
        return $db;
    }

}

