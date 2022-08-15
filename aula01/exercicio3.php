<?php

/*Efetuar o cálculo da quantidade de litros de combustível gasta em uma viagem, utilizando um
automóvel que faz 12 Km por litro. Para obter o cálculo, o usuário deve fornecer o tempo gasto
(TEMPO) e a velocidade média (VELOCIDADE) durante a viagem. Desta forma, será possível obter a
distância percorrida com a fórmula DISTANCIA ← TEMPO * VELOCIDADE. Possuindo o valor da
distância, basta calcular a quantidade de litros de combustível utilizada na viagem com a fórmula
LITROS_USADOS ← DISTANCIA / 12. Ao final, o programa deve apresentar os valores da velocidade
média (VELOCIDADE), tempo gasto na viagem (TEMPO), a distancia percorrida (DISTANCIA) e a
quantidade de litros (LITROS_USADOS) utilizada na viagem.
*/

if(!isset( $_GET["tempo"])){
    $_GET["tempo"] = "";
}
if(!isset( $_GET["velocidade"])){
    $_GET["velocidade"] = "";
}

$tempo = (double) $_GET["tempo"];
$velocidade = (double) $_GET["velocidade"];
$distancia = $tempo * $velocidade;
$litros_gastos = $distancia / 12;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercio 7-D km/L</title>
</head>
<body>

<center>
    <h2>Exercio 7-D km/L</h2>
    <form action="exercicio3.php" method="get">
        <label for="tempo">Digite o tempo gasto em horas: </label>
        <input type="text" name="tempo">

        <label for="velocidade">Digite a velocidade: </label>
        <input type="text" name="velocidade">

        <input type="submit" value="Enviar">
        <br><br><br>
        <?php echo "Tempo gasto: {$tempo} horas &nbsp; &nbsp; &nbsp; <br> Velocidade média: {$velocidade} km <br> Distância percorrida: {$distancia} km/h <br> Litros usados: {$litros_gastos} L" ; ?>

</form></center></body></html>


