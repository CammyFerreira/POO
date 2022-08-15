<?php

/*Calcular e apresentar o valor do volume de uma lata de óleo, utilizando a fórmula:
Volume Raio ** Altura 2 ←π
*/

if(!isset( $_GET["altura"])){
    $_GET["altura"] = "";
}
if(!isset( $_GET["raio"])){
    $_GET["raio"] = "";
}

$altura = (double) $_GET["altura"];
$raio = (double) $_GET["raio"];
$resultado = 3.14 * $raio * $raio * $altura;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercio 7-C Volume</title>
</head>
<body>

<center>
    <h2>Exercio 7-C Volume</h2>
    <form action="exercicio2.php" method="get">
        <label for="altura">Digite uma altura: </label>
        <input type="text" name="altura">

        <label for="raio">Digite um raio: </label>
        <input type="text" name="raio">

        <input type="submit" value="Enviar">
        <br><br><br>
        <?php echo "Volume: {$resultado} &nbsp; &nbsp; &nbsp;"; ?>

</form></center></body></html>


