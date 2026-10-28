<?php
if (!isset($_GET['ojos'])) {
    $ojos = [];

    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
            $ojos[$i][$j] = 0;
        }
    }
} else {
    $ojos = unserialize(base64_decode($_GET['ojos']));

    $fila = $_GET['fila'];
    $columna = $_GET['columna'];

    if ($ojos[$fila][$columna] == 0) {
        $ojos[$fila][$columna] = 1;
    } else {
        $ojos[$fila][$columna] = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de ojos</title>

    <style>
        table,
        tr,
        th {
            border: 1px solid black;
        }

        img {
            width: 50px;
        }
    </style>
</head>

<body>

    <table>
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <tr>
                <?php for ($j = 0; $j < 10; $j++) { ?>
                    <th>
                        <a href="ejercicio1.php?fila=<?php echo $i; ?>&columna=<?php echo $j; ?>&ojos=<?php echo base64_encode(serialize($ojos)); ?>">

                            <?php if ($ojos[$i][$j] == 0) { ?>
                                <img src="cerrado.jpg" alt="Ojo cerrado">
                            <?php } else { ?>
                                <img src="abierto.jpg" alt="Ojo abierto">
                            <?php } ?>

                        </a>
                    </th>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

</body>

</html>