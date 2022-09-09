<?php

class Conection{

 public $conn;


function conexao(){
    $this->conn = new mysqli("localhost", "root", "", "protocolo");
} 

function login($email, $codAcesso){
    
session_start();

$result = $conn->query ("SELECT email FROM usuarios" );

if( password_verify( $codAcesso) ){

    $_SESSION['id'] = $email;

    header('location: ../cadastro.html');

}else{

    echo "Credenciais inválidas";
    }
}

function cadastrar(){



}



}