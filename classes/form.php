<?php

require_once "MediaAritmetica.php";
require_once "MediaGeometrica.php";

if (isset($_POST['btn_calcular'])) {

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $aluno  = $_POST['aluno'];

    $notaAritmedica = new MediaA($nota1, $nota2, $aluno);
    $mediaArit      = $notaAritmedica->mediaAritmetica();
    $notaGeometrica = new MediaG($nota1, $nota2, $aluno);
    $mediaGeo = $notaGeometrica->mediaGeometrica();
}  

?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <form method="post">
        <label>Aluno</label> <input type="text" name="aluno" required>
        <label>Nota 01</label> <input type="text" name="nota1" required>
        <label>Nota 02</label> <input type="text" name="nota2" required>
        <input type="submit" name="btn_calcular" value="Calcular Nota">
    </form>

    <div>
        <p>Nota Aritmetica: <?= (isset($mediaGeo)) ? number_format($mediaArit, 2) : '' ?> </p>

        <p>Nota Geometrica: <?= (isset($mediaGeo)) ? number_format($mediaGeo, 2) : '' ?> </p>
    </div>
</body>
</html>
