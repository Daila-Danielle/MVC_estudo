<?php

use App\Controllers\PessoaController;

$caminho_servidor = '/treinamento/Daila/php/MVC_estudo';
$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH); 


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
    case $caminho_servidor.'/pessoa/delete':
        PessoaController::delete();
    break;
    default:
        echo "boiando aqui";
    break;
}