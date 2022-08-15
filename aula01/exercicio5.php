<?php

/*Elaborar um programa que calcule e apresente o volume de uma caixa retangular, por meio da fórmula
VOLUME ← COMPRIMENTO * LARGURA * ALTURA.
*/

if(!isset( $_GET["altura"])){
    $_GET["altura"] = "";
}
if(!isset( $_GET["largura"])){
    $_GET["largura"] = "";
}
if(!isset( $_GET["comprimento"])){
    $_GET["comprimento"] = "";
}

$altura = (double) $_GET["altura"];
$largura = (double) $_GET["largura"];
$comprimento = (double) $_GET["comprimento"];
$resultado = $altura * $largura * $comprimento;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercio 7-C Volume retângulo</title>
</head>
<body>

<center>
    <h2>Exercio 7-H Volume</h2>
    <form action="exercicio5.php" method="get">
        <label for="altura">Digite uma altura: </label>
        <input type="text" name="altura">

        <label for="largura">Digite um largura: </label>
        <input type="text" name="largura">

        <label for="comprimento">Digite um comprimento: </label>
        <input type="text" name="comprimento">

        <input type="submit" value="Enviar">
        <br><br><br>
        <?php echo "Volume: {$resultado} cm3 &nbsp; &nbsp; &nbsp;"; ?>

</form></center></body></html>


