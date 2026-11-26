<?php
require_once("diccionario.php");

if(isset($_COOKIE["diccionario"])){
    $diccionario = unserialize($_COOKIE["diccionario"]);
}else{
    $diccionario = $diccionarioInicial;
}

if(isset($_REQUEST["reiniciar"])){
    $diccionario = $diccionarioInicial;
    setcookie("diccionario", serialize($diccionario), time() + 3600);
    header("Location: administrar.php");
}

if (isset($_POST["eliminar"])) {
    $eliminar = $_POST["eliminar"];
    unset($diccionario[$eliminar]);
    setcookie("diccionario", serialize($diccionario), time() + 3600);
    header("Location: administrar.php");
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
    <form action="adjuntar.php" method="post">
        <input type="submit" value="Añadir nueva palabra">
    </form>

    <form action="" method="post">
        <input type="submit" name="reiniciar" value="Reiniciar a diccionario por defecto">
    </form>

    <form action="index.php" method="post">
        <input type="submit" value="Regresar a pagina principal">
    </form>

    <hr>
    <h1>INGLES ESPAÑOL</h1>
    <table border="1">
        <?php foreach ($diccionario as $key => $value) {?>
            <tr>
                <td><?php  echo $key;?></td>
                <td><?php  echo $value;?></td>
                <td> 
                    <form action="" method="post">
                        <input type="hidden" name="eliminar" value="<?php echo $key; ?>">
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
                <td> 
                    <form action="modificar.php" method="post">
                        <input type="hidden" name="key" value="<?php echo $key; ?>">
                        <input type="hidden" name="value" value="<?php echo $value; ?>">
                        <input type="submit" value="Modificar">
                    </form>
                </td>
            </tr>
        <?php }?>
    </table>

</body>
</html>