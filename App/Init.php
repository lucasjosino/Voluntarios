<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap
{
    protected function initRoutes()
    {
        $ar['home'] = array('route'=>'/','controller'=>'submissaoController','action'=>'starter');
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
        $db = new \PDO("mysql:host=localhost;dbname=revista","root","");
        return $db;
    }

}

