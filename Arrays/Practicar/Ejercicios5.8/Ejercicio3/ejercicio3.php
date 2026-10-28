
<?php
if (!isset($_REQUEST['tabla'])) {
    $tabla = [];
    $cont = 10;

    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
            $tabla[$i][$j] = 0;
        }
    }
} else {
    $tabla = unserialize(base64_decode($_REQUEST['tabla']));
    $cont = $_REQUEST['cont'];

    if (isset($_GET['fila']) && isset($_GET['columna'])) {
        $fila = $_GET['fila'];
        $columna = $_GET['columna'];

        if ($tabla[$fila][$columna] == 0) {
            $tabla[$fila][$columna] = 1;
            $cont--;
        }
    }
}

if ($cont < 0) {
    header("Location: fallo.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina al personaje</title>
</head>

<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
        width: 500px;
        height: 500px;
        background-image: url("gengar.jpg");
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-position: center;
    }

    th {
        border: 1px solid black;
        padding: 0;
    }

    .oculto {
        background-color: blanchedalmond;
    }

    th a {
        display: block;
        width: 100%;
        height: 100%;
        min-height: 40px;
    }
</style>

<body>
    <h1>Adivina al personaje</h1>

    <p>Te quedan estos intentos: <?php echo $cont; ?></p>

    <table>
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j < 10; $j++) { ?>

                    <?php if ($tabla[$i][$j] == 0) { ?>
                        <th class="oculto">
                            <a href="ejercicio3.php?fila=<?php echo $i; ?>&columna=<?php echo $j; ?>&tabla=<?php echo urlencode(base64_encode(serialize($tabla))); ?>&cont=<?php echo $cont; ?>"></a>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>

                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <form action="respuesta.php" method="post">
        <p>Escribe tu respuesta</p>

        <input type="hidden" name="tabla"
                value="<?php echo base64_encode(serialize($tabla)); ?>">

        <input type="hidden" name="cont"
               value="<?php echo $cont; ?>">

        <input type="text" name="respuesta" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
