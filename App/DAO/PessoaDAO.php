<?php

class PessoaDAO
{
    private $conexao;


    public function __construct()
    {
       

/*         define('HOST', '192.168.1.254');
        define('USER', 'estagiario');
        define('PASS', 'estagio123');
        define('BASE', 'treinamento_daila');
      
        $this->conexao = new MySQLi(HOST, USER, PASS, BASE); */

        $this->conexao = new MySQLi('127.0.0.1', 'root', '', 'test');
        

    }

    public function insert(PessoaModel $model)
    {
        $sql = "INSERT INTO tbl_pessoa (nome, cpf, data_nascimento)
        VALUES ('{$model->nome}','{$model->cpf}','{$model->data_nascimento}')";
        $res  = $this->conexao->query($sql);

    }

    public function update(PessoaModel $model)
    {
        
    }

    public function select()
    {
        $sql = "SELECT * FROM tbl_pessoa";
        $res = $this->conexao->query($sql);
        $results = array();
        
        while ($row = $res->fetch_object()) {
            $results[] = $row;
        }
        
        return $results;
    }

    public function delete(PessoaModel $model)
    {
        
    }


}
