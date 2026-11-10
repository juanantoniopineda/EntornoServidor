<?php
require_once("controlAcceso.php");

$fila = rand(1, 5);
$columna = rand(1, 5);

$letras = ["A", "B", "C", "D", "E"];

$columna = $letras[$columna - 1];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .contenedor-tablas {
        display: flex;
        gap: 20px;
    }
</style>

<body>
    <div class="contenedor-tablas">
        <?php
        echo imprimeTarjeta("administrador");
        echo imprimeTarjeta("usuario");
        ?>
    </div>

    <form action="comprobar.php" method="post">

        <label for="perfil">Perfil:</label><br>
        <select name="perfil" id="perfil">
            <option value="administrador" selected>Administrador</option>
            <option value="usuario">Usuario estándar</option>
        </select>

        <h2>INTRODUCE LA SIGUIENTE COORDENADA</h2>

        <h2>COORDENADA Fila: <?php echo $fila; ?> Columna: <?php echo $columna; ?></h2>

        <input type="text" name="comprobacion">

        <button type="submit">COMPROBAR</button>

        <input type="hidden" name="fila" value="<?php echo $fila; ?>">
        <input type="hidden" name="columna" value="<?php echo $columna; ?>">

    </form>

</body>

</html>