<?php 
    if(isset($_POST["alta"])){
        $diccionario = unserialize($_COOKIE["diccionario"]);

        $cambio1 = $_POST["cambio1"];
        $cambio2 = $_POST["cambio2"];

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
    <h1>Nueva palabra</h1>
    <hr>
    <form action="" method="post">
        
        Español <input type="text" name="cambio1" > <br>
        Ingles <input type="text" name="cambio2""> <br><br>

        <input type="submit" value="Alta" name="alta">
        <br><br>

        <input type="submit" value="Volver" name="volver">
    </form>
</body>
</html>