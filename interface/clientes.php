<?php

require_once "itransaction.php";

class Cliente implements ITransaction
{
    public $chave;
    public $nome;

    public function _construct($chave, $nome)
    {
        $this->$chave = $chave;
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
$obj = new Cliente("1", "Camila");
$obj->criarTabela("create table clientes (int chave, varchar nome(2))");

