<?php
interface ITransaction
{
    public function conectarBanco($con);
    public function criarTabela($sql);
    public function salvarRegistro($sql);
    public function excluirRegistro($sql);
    public function exibirRegistroGridHtml($sql);
}

