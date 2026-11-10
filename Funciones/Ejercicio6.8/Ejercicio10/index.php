<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h2>Escribe su nombre</h2>
        <input type="text" name="nombre"><br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if (isset($_REQUEST["nombre"])) {
        $nombre = $_REQUEST["nombre"];
        $partes = explode(" ", $nombre);
        for ($i = 0; $i < count($partes); $i++) {
            $partes[$i] =ucfirst($partes[$i]);
        }

        $nombreFinal = implode(" ", $partes);
        echo "<h2>" . $nombreFinal . "</h2>";
    }
    ?>
</body>

</html>