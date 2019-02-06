<?php

namespace SON\Init;

abstract class Bootstrap {

    private $routes;

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    abstract protected function initRoutes();

    protected function run($url)
    {
        session_start();
        array_walk($this->routes, function($route) use ($url){
            $admin = array('/gerencia','/download','/downloadm');
            if ($url == $route['route']) 
            {
                if (in_array($route['route'],$admin))
                {
                    if(isset($_SESSION['usuario']))
                    {
                        $class = "App\\Controllers\\".ucfirst($route['controller']);
                        $controller = new $class;
                        $controller->{$route['action']}();
                    }   
                }
                else
                {
                    $class = "App\\Controllers\\".ucfirst($route['controller']);
                    $controller = new $class;
                    $controller->{$route['action']}();
                }
            }
        });
    }

    protected function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);    
    }



}