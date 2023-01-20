<?php

namespace App\DAO;


abstract class DAO {

    protected $conexao;

    public function __construct()
    {
      
        $this->conexao = new \MySQLi(HOST, USER, PASS, BASE);

    }
}