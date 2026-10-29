<?php
if (!isset($_REQUEST['personas'])) {
    $personas = [];
} else {
    $personas = unserialize(base64_decode($_REQUEST['personas']));
    $personas[] = $_REQUEST['datos'];
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
    <h1>Introduzca a las personas</h1>
    <form action="" method="post">
        Nombre: <input type="text" name="datos[nombre]"> <br>
        Sexo: Hombre <input type="radio" name="datos[sexo]" value="h">
        Mujer <input type="radio" name="datos[sexo]" value="m"> <br>
        Orientacion: Heterosexual <input type="radio" name="datos[orientacion]" value="het">
        Homosexual <input type="radio" name="datos[orientacion]" value="hom">
        Bisexual <input type="radio" name="datos[orientacion]" value="bis"><br>
        <input type="hidden" name="personas" value="<?php echo base64_encode(serialize($personas)); ?>">
        <input type="submit" value="Enviar">
    </form>


    <h1>Enviar los datos adjuntados</h1>
    <form action="listado.php" method="post">
        <input type="hidden" name="personas" value="<?php echo base64_encode(serialize($personas)); ?>"><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>