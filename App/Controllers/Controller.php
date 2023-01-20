<?php

namespace App\Controllers;

abstract class Controller{

    protected static function render($view, $model = null)
    {
        //$arquivo_view = "Views/modules/$view.php";
        $arquivo_view= VIEWS . $view . ".php";
        if(file_exists($arquivo_view))
            include "Views/modules/$view.php";
        else 
            exit('Arquivo da View não encontrado.Arquivo: '.$view);

    }
}