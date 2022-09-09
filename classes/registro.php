<?php

require_once("conexao.php");

class Registro extends Conection{

    public $id_cli;
    public $login;
    public $email;
    public $telefone;
    public $codAcesso;
    public $tipo;
    public $validado;



    public function setUsuario($nome, $email, $telefone)
    {        
        $login = $_POST['login']; 
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $this->conexao();
        $conn->query("INSERT INTO usuarios (login, email, telefone) VALUES ('$login', $email, $telefone)");

    }

    public function setRegistrar(){
        
        $codAcesso = $_POST['codAcesso']; 
        $codigogerardo = "1234";
        
        $this->conexao();
        $conn->query("INSERT INTO usuarios (codAcesso) VALUES ($codAcesso)");
    }

    public function setValidar( $conn )
    {
        $this->conexao();
        $conn->execute("update set usuarios if ( valido <> '1'. '1', '0') ");

    }

    public function setLogin($email, $codAcesso){
        $this->conexao();
        $this->login($email, $codAcesso);
    }
}