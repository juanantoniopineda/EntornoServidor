<?php
require_once("diccionario.php");

if(isset($_COOKIE["diccionario"])){
    $diccionario = unserialize($_COOKIE["diccionario"]);
}else{
    $diccionario = $diccionarioInicial;
}

if(isset($_REQUEST["reiniciar"])){
    
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
    <h1>Administracion de palabras</h1>
    <hr>
    <form action="anadir.php" method="post">
        <input type="submit" value="Añadir nueva palabra">
    </form>

    <form action="administrar.php" method="post">
        <input type="submit" name="reiniciar" value="Reiniciar a diccionario por defecto">
    </form>

    <form action="index.php" method="post">
        <input type="submit" value="Regresar a pagina principal">
    </form>

</body>
</html>