<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de personas</title>
</head>
<style>
    table {
        width: 600px;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: center;
        border: 1px solid black;
    }
</style>

<body>

    <h1>Listado de personas</h1>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Orientacion</th>
            <th>Accion</th>
        </tr>

        <?php
        $personas = unserialize(base64_decode($_REQUEST['personas']));

        foreach ($personas as $datos) { ?>
            <tr>
                <td>
                    <?php echo $datos['nombre']; ?>
                </td>
                <td>
                    <?php echo ($datos['sexo'] == "h") ? "Hombre" : "Mujer"; ?>
                </td>
                <td>
                    <?php if ($datos['orientacion'] == "het") {
                        echo "Heterosexual";
                    } else if ($datos['orientacion'] == "hom") {
                        echo "Homosexual";
                    } else {
                        echo "Bisexual";
                    } ?>
                </td>
                <td>
                    <form action="" method="post">
                        <input type="hidden" name="select" value="<?php echo base64_encode(serialize($datos)); ?>">
                        <input type="submit" value="Seleccionar">
                    </form>
                </td>
            </tr>
        <?php } ?>

        <?php if (!isset($_REQUEST['select'])) {
            $select = [];
            echo "<h1>Selecciona una persona</h1>";
        }else{ $select = unserialize(base64_decode($_REQUEST['select']));?>

        <?php }?>


    </table>

</body>

</html>