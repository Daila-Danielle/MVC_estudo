<?php

class PessoaController
{
    public static function index()
    {
        include 'Views/modules/Pessoa/ListaPessoa.php';
    }

    public static function form()
    {
        include 'Views/modules/Pessoa/FormPessoa.php';
    }

}