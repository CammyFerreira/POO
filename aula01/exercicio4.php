<?php

/*Efetuar o cálculo e a apresentação do valor de uma prestação em atraso, utilizando a fórmula
PRESTACAO ← VALOR + (VALOR * TAXA/100) * TEMPO).
*/

if(!isset( $_GET["valor"])){
    $_GET["valor"] = "";
}
if(!isset( $_GET["taxa"])){
    $_GET["taxa"] = "";
}
if(!isset( $_GET["tempo"])){
    $_GET["tempo"] = "";
}


$valor = (double) $_GET["valor"];
$taxa = (double) $_GET["taxa"];
$tempo = (double) $_GET["tempo"];
$prestacao = $valor + ($valor * $taxa/100) * $tempo;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercio 7-E Prestação em atraso</title>
</head>
<body>

<center>
    <h2>Exercio 7-E Prestação em atraso</h2>
    <form action="exercicio4.php" method="get">
        <label for="valor">Digite o valor: </label>
        <input type="text" name="valor">

        <label for="taxa">Digite a taxa: </label>
        <input type="text" name="taxa">
        
        <label for="tempo">Digite o tempo: </label>
        <input type="text" name="tempo">        

        <input type="submit" value="Enviar">
        <br><br><br>
        <?php echo "Prestação: R$ {$prestacao}&nbsp; &nbsp; &nbsp;";?>

</form></center></body></html>
