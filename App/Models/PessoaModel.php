<?php

namespace App\DAO;

Use App\Models\PessoaModel;
class PessoaDAO
{
    private $conexao;


    public function __construct()
    {
       

        define('HOST', '192.168.1.254');
        define('USER', 'estagiario');
        define('PASS', 'estagio123');
        define('BASE', 'treinamento_daila');
      
        $this->conexao = new \MySQLi(HOST, USER, PASS, BASE);
        

    }

    public function insert(PessoaModel $model)
    {
        $sql = "INSERT INTO tbl_pessoa (nome, cpf, data_nascimento)
        VALUES ('{$model->nome}','{$model->cpf}','{$model->data_nascimento}')";
        $res  = $this->conexao->query($sql);

    }

    public function update(PessoaModel $model)
    {
        $sql = "UPDATE  tbl_pessoa SET nome = '{$model->nome}', cpf = '{$model->cpf}', data_nascimento = $model->data_nascimento
        WHERE id = $model->id";
        $res  = $this->conexao->query($sql);

        return $res;
       
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

    public function selectById(int $id)
    {
        
        $sql = "SELECT * FROM tbl_pessoa WHERE id = $id";
        $res = $this->conexao->query($sql);
        
        return $res->fetch_object("App\Model\PessoaModel");
    }
    

    public function delete(int $id)
    {
        $sql = "DELETE FROM tbl_pessoa WHERE id  = $id";
        $res  = $this->conexao->query($sql);
    }


}
