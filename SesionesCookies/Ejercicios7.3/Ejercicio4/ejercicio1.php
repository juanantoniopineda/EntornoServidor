<?php
session_start();

if (!isset($_SESSION["logueado"]) || !$_SESSION["logueado"]) {
    header("Location: login.php");
    exit;
}

$bandera = true;
if (!isset($_REQUEST["numero"])) {
    $_SESSION['suma'] = 0;
    $_SESSION['cont'] = 0;
} else {
    if ($_REQUEST["numero"] < 0) {
        $bandera = false;
    } else {
        $_SESSION['cont']++;
        $_SESSION['suma'] += $_REQUEST["numero"];
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
        echo $_SESSION['suma'] / $_SESSION['cont'];
    } ?>

    <form action="login.php" method="post">
        <input type="submit" name="cerrar" value="Cerrar sesión">
    </form>


</body>

</html>