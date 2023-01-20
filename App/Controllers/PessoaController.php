<?php

namespace App\Controllers;

use App\Models\PessoaModel;
class PessoaController extends Controller
{
    /**
     * Método para exibir a lista de pessoas
     * Inclui o arquivo com o modelo da pessoa e carrega a view de listagem
     */
    public static function index()
    {
       
        $model = new PessoaModel();
        $model->getAllRows();
        
        parent::render('Pessoa/ListaPessoa',$model);
        
    }

    /**
     * Método para exibir o formulário de cadastro de pessoas
     * Inclui o arquivo da view de formulário
     */
    public static function form()
    {
        
        $model = new PessoaModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);
        
        parent::render('Pessoa/FormPessoa',$model);
       // include 'Views/modules/Pessoa/FormPessoa.php';
    }

    /**
     * Método para salvar os dados enviados pelo formulário
     * Inclui o arquivo com o modelo da pessoa, cria uma nova instância do modelo
     * preenche os atributos com os dados do $_POST e chama o método de salvar
     * redireciona o usuário para a página de listagem
     */
    public static function save()
    {
        
        $model = new PessoaModel();
        $model->id = (int) $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model ->save();
        
        header("Location: /treinamento/Daila/php/MVC_estudo/pessoa");
        
    }

    public static function delete()
    {
        
        $model = new PessoaModel();
        $model->delete( (int) $_GET['id']);
        header("Location: /treinamento/Daila/php/MVC_estudo/pessoa");

    }

}
