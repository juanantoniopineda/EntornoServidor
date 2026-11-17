<?php
session_start();
$bandera = true;
if (!isset($_REQUEST["numero"])) {
    $_SESSION['suma'] = 0;
    $_SESSION['cont'] = 0;
} else {
    $_SESSION['suma'] += $_REQUEST["numero"];
    $_SESSION['cont']++;

    if ($_SESSION['suma'] >= 10000) {
        $bandera = false;
    } 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if ($bandera) { ?>
        <form action="" method="post">
            <h1>Introduce numeros</h1>
            <p>Cuando quieras parar introduce un numero negativo</p>
            Introduce Numero:<input type="text" name="numero">
            <input type="submit" value="Enviar">
        </form>
    <?php } else {
        echo "La suma es ". $_SESSION['suma']. " <br>";
        echo "La media es ". ($_SESSION['suma']/$_SESSION['cont']);
    } ?>

</body>

</html>