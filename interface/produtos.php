<?php

require_once "itransaction.php";

class Produto implements ITransaction
{
    public $nome;
    public $descricao;

    public function _construct($descricao, $nome)
    {
        $this->$descricao = $descricao;
        $this->$nome = $nome;
    }
    public function conectarBanco($con)
    {
        
    }
    public function criarTabela($sql)
    {
        
    }
    public function salvarRegistro($sql)
    {
        
    }
    public function excluirRegistro($sql)
    {
        
    }
    public function exibirRegistroGridHtml($sql)
    {
        
    }
}
$obj = new Produto("PS4", "Console de video game");
$obj->criarTabela("create table produto (varchar nome(2)), varchar descricao(50))");