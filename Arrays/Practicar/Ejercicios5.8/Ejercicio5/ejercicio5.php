<?php
if (!isset($_REQUEST['aspirantes'])) {
    $aspirantes = [];
} else {
    $aspirantes = unserialize(base64_decode($_REQUEST['aspirantes']));
    $aspirantes[$_REQUEST['nombre']] = $_REQUEST['datos'];
};

$aspiranteTexto=base64_encode(serialize($aspirantes)); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Edad: <input type="text" name="datos[edad]" required><br>
        Años de experencia: <input type="text" name="datos[anio]" required><br>
        Correo: <input type="text" name="datos[correo]" required><br>
        <input type="hidden" name="aspirantes" value="<?php echo $aspiranteTexto; ?>">
        <input type="submit" value="Enviar">
    </form>
    <hr>
    <h2>Mostrar listado de aspirantes</h2>

    <form action="resultado.php" method="post">
        <input type="hidden" name="aspirantes" value="<?php echo $aspiranteTexto; ?>">
        <input type="submit" value="Enviar">
    </form>

</body>

</html>