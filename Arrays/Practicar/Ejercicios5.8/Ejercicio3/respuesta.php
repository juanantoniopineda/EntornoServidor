
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php if(strtolower($_REQUEST['respuesta']) == "gengar"){ ?>
        <h1>Enhorabuena, lo has adivinado, es Gengar</h1>
        <img src="gengar.jpg" alt="">
    <?php } else {
        $tabla = unserialize(base64_decode($_REQUEST['tabla']));
        $cont = $_REQUEST['cont'];
    ?>
        <h1>Lo siento, no lo has adivinado</h1>
        <p>Volver para intentarlo de nuevo</p>
        <a href="ejercicio3.php?tabla=<?php echo urlencode(base64_encode(serialize($tabla))); ?>&cont=<?php echo $cont; ?>">Volver</a>
    <?php } ?>
</body>
</html>
