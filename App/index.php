<?php

include 'Controllers/PessoaController.php';

$caminho_servidor = '/MVC/App/';
$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH); # 


switch($url)
{
    case $caminho_servidor.'':
        echo "pagina inicial";
    break;

    case $caminho_servidor.'pessoa':
        PessoaController::index();
    break;
    case $caminho_servidor.'form':
        PessoaController::form();
    break;
    default:
        echo "boiando";
    break;
}