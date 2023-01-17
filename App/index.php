<?php

include 'Controllers/PessoaController.php';
ini_set ( 'display_errors' , 1); error_reporting (E_ALL);
$caminho_servidor = '/MVC';
$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH); # 

echo $url;

switch($url)
{
    case $caminho_servidor.'/':
        echo "pagina inicial";
    break;

    case $caminho_servidor.'/pessoa':
        PessoaController::index();
    break;
    case $caminho_servidor.'/pessoa/form':
        PessoaController::form();
    break;
    case $caminho_servidor.'/pessoa/form/save':
        PessoaController::save();
    break;
    default:
        echo "boiando aqui";
    break;
}