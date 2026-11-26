<?php 
    $key = $_REQUEST["key"];
    $value = $_REQUEST["value"];

    if(isset($_POST["modificar"])){
        $diccionario = unserialize($_COOKIE["diccionario"]);

        $cambio1 = $_POST["cambio1"];
        $cambio2 = $_POST["cambio2"];

        unset($diccionario[$key]);

        $diccionario[$cambio1] = $cambio2;

        setcookie("diccionario", serialize($diccionario), time() + 3600);

        header("Location: administrar.php");

    }

    if(isset($_POST["volver"])){
         header("Location: administrar.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar</title>
</head>
<body>
    <h1>Modificacion</h1>
    <hr>
    <form action="" method="post">

        <input type="hidden" name="key" value="<?= $key ?>">

        Español <input type="text" name="cambio1" value="<?= $key ?>"> <br>
        Ingles <input type="text" name="cambio2" value="<?= $value ?>"> <br><br>

        <input type="submit" value="Modificar" name="modificar">
        <br><br>

        <input type="submit" value="Volver" name="volver">
    </form>
</body>
</html>