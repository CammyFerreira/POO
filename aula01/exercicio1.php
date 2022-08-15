<?php

/*Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. A fórmula de
conversão é F ← (9 * C + 160) / 5, sendo F a temperatura em Fahrenheit e C a temperatura em Celsius.
*/

if(!isset( $_GET["temperatura"])){
    $_GET["temperatura"] = "";
}

$temperatura = (double) $_GET["temperatura"];
$conversao = ($temperatura *9) + 160;
$resultado = $conversao;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercio 7-A Temperatura</title>
</head>
<body>

<center>
    <h2>Exercio 7-A Temperatura</h2>
    <form action="exercicio1.php" method="get">
        <label for="temperatura">Digite um valor de Celsius: </label>
        <input type="text" name="temperatura">

        <input type="submit" value="Enviar">
        <br><br><br>
        <?php echo "Fahrenheit: {$resultado} &nbsp; &nbsp; &nbsp;"; ?>

</form></center></body></html>


