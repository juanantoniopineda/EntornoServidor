<?php 
require_once("controlAcceso.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $validacion = compruebaClave(dameTarjeta($_REQUEST["perfil"]),$_REQUEST["fila"],$_REQUEST["columna"],$_REQUEST["comprobacion"]);

        if($validacion){?>
            <p>Acceso Permitido</p>
            <form action="index.php">
                <button type="submit">CONTINUAR</button>
            </form>
        <?php }else{?>
            <p>Clave incorrecta. Acceso Restringido</p>
            <form action="index.php">
                <button type="submit">VOLVER</button>
            </form>
        <?php }?>
</body>
</html>