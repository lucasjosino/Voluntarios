<?php

namespace SON\Controller;

class Action {

    public $view;

    public function __construct()
    {
        $this->view = new \stdClass;
    }

    public function render($action)
    {
        $atual = get_class($this);
        // utilizarei no futuro não nessa aplicação, basicamente é uma divisão em pastas tanto do controller quanto da view
        $singleClassName = \strtolower(str_replace("App\\Controllers\\","",$atual));
        include_once '../App/Views/'.$action.'.php';
    }
    
    // será utilizado quando for necessário criar aplicação com layouts
    public function content()
    {
        $atual = get_class($this);
        // utilizarei no futuro não nessa aplicação, basicamente é uma divisão em pastas tanto do controller quanto da view
        $singleClassName = \strtolower(str_replace("App\\Controllers\\","",$atual));
        include_once '../App/Views/'.$action.'.php';   
    }

}