<?php

class PessoaController
{
    /**
     * Método para exibir a lista de pessoas
     * Inclui o arquivo com o modelo da pessoa e carrega a view de listagem
     */
    public static function index()
    {
        include 'Models/PessoaModel.php';

        $model = new PessoaModel();
        $model->getAllRows();
        include 'Views/modules/Pessoa/ListaPessoa.php';
        
    }

    /**
     * Método para exibir o formulário de cadastro de pessoas
     * Inclui o arquivo da view de formulário
     */
    public static function form()
    {
        include 'Views/modules/Pessoa/FormPessoa.php';
    }

    /**
     * Método para salvar os dados enviados pelo formulário
     * Inclui o arquivo com o modelo da pessoa, cria uma nova instância do modelo
     * preenche os atributos com os dados do $_POST e chama o método de salvar
     * redireciona o usuário para a página de listagem
     */
    public static function save()
    {
        include 'Models/PessoaModel.php';

        $model = new PessoaModel();

        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model ->save();
        
        header("Location: /treinamento/Daila/php/MVC_estudo/pessoa");
        
    }

}
