<?php
if(isset( $_POST['nome'])){
    $_POST["nome"] = "";
}
if(isset( $_POST['nota1'])){
    $_POST["nota1"] = 0;
}
if(isset( $_POST['nota2'])){
    $_POST["nota2"] = 0;
}
if(isset( $_POST['oper'])){
    $_POST["oper"] = "";
}

$nome = $_POST["nome"];
$nota1 = (double) $_POST["nota1"];
$nota2 = (double) $_POST["nota2"];
$media  = ($nota1 + $nota2) / 2;

if($_POST["oper"] == "limpar"){
    $nome = ""; $nota1 = ""; $nota2 = ""; $media = "";
}
?>