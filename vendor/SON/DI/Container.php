<?php

namespace SON\DI;

class Container
{
    public static function getClass($name)
    {
     	include ("../App/Models/".strtolower($name) . ".php");    
    	$namespaceClass = "\\App\\Models\\".$name;
    	$item = new $namespaceClass(\App\Init::getDb());      
        return $item;
    }
}