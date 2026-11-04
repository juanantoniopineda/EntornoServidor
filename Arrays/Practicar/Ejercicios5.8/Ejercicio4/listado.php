<?php

?>

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
    <h2>Selecciona una persona</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Orientacion</th>
            <th>Accion</th>
        </tr>

        <?php
        $personas = unserialize(base64_decode($_REQUEST['personas']));

        if (isset($_REQUEST['select'])) {
            $select = unserialize(base64_decode($_REQUEST['select']));
        }

        foreach ($personas as $datos) { ?>
            <tr style="<?php echo (isset($select) && $datos['nombre'] == $select['nombre']) ? 'background-color: yellow;' : ''; ?>">
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
                        <input type="hidden" name="personas" value="<?php echo base64_encode(serialize($personas)); ?>">
                        <input type="hidden" name="select" value="<?php echo base64_encode(serialize($datos)); ?>">
                        <input type="submit" value="Seleccionar">
                    </form>
                </td>
            </tr>

        <?php } ?>
    </table>

    <?php
    if (isset($_REQUEST['select'])) {
        $select = unserialize(base64_decode($_REQUEST['select']));

        echo "<h1>Persona seleccionada</h1>";
        echo "<ul>";
        echo "<li>" . $select['nombre'] . "</li>";
        echo ($select['sexo'] == "h") ? "<li>Hombre</li>" : "<li>Mujer</li>";

        if ($select['orientacion'] == "het") {
            echo "<li>Heterosexual</li>";
        } else if ($select['orientacion'] == "hom") {
            echo "<li>Homosexual</li>";
        } else {
            echo "<li>Bisexual</li>";
        }
        echo "</ul>";
    ?>
        <h1>Parejas ideales</h1>
        <h2>Seleccione una para emparejar</h2>
        <table>

            <form action="" method="post">

                <input type="hidden" name="personas" value="<?php echo base64_encode(serialize($personas)); ?>">
                <input type="hidden" name="select" value="<?php echo base64_encode(serialize($select)); ?>">

                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Sexo</th>
                        <th>Orientacion</th>
                        <th>Accion</th>
                    </tr>

                    <?php foreach ($personas as $datos) { ?>

                        <?php if ($datos['nombre'] != $select['nombre']) { ?>

                            <?php if ($select['sexo'] == "h") { ?>

                                <?php if ($select['orientacion'] == "het") { ?>

                                    <?php if (($datos['sexo'] == "m" && $datos['orientacion'] == "het") || ($datos['sexo'] == "m" && $datos['orientacion'] == "bis")) { ?>

                                        <tr>
                                            <td><?php echo $datos['nombre']; ?></td>
                                            <td><?php echo ($datos['sexo'] == "h") ? "Hombre" : "Mujer"; ?></td>
                                            <td>
                                                <?php
                                                if ($datos['orientacion'] == "het") {
                                                    echo "Heterosexual";
                                                } else if ($datos['orientacion'] == "hom") {
                                                    echo "Homosexual";
                                                } else {
                                                    echo "Bisexual";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="pareja" value="<?php echo base64_encode(serialize($datos)); ?>">
                                            </td>
                                        </tr>

                                    <?php } ?>

                                <?php } else if ($select['orientacion'] == "hom") { ?>

                                    <?php if (($datos['sexo'] == "h" && $datos['orientacion'] == "hom") || ($datos['sexo'] == "h" && $datos['orientacion'] == "bis")) { ?>

                                        <tr>
                                            <td><?php echo $datos['nombre']; ?></td>
                                            <td><?php echo ($datos['sexo'] == "h") ? "Hombre" : "Mujer"; ?></td>
                                            <td>
                                                <?php
                                                if ($datos['orientacion'] == "het") {
                                                    echo "Heterosexual";
                                                } else if ($datos['orientacion'] == "hom") {
                                                    echo "Homosexual";
                                                } else {
                                                    echo "Bisexual";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="pareja" value="<?php echo base64_encode(serialize($datos)); ?>">
                                            </td>
                                        </tr>

                                    <?php } ?>

                                <?php } else if ($select['orientacion'] == "bis") { ?>

                                    <tr>
                                        <td><?php echo $datos['nombre']; ?></td>
                                        <td><?php echo ($datos['sexo'] == "h") ? "Hombre" : "Mujer"; ?></td>
                                        <td>
                                            <?php
                                            if ($datos['orientacion'] == "het") {
                                                echo "Heterosexual";
                                            } else if ($datos['orientacion'] == "hom") {
                                                echo "Homosexual";
                                            } else {
                                                echo "Bisexual";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <input type="radio" name="pareja" value="<?php echo base64_encode(serialize($datos)); ?>">
                                        </td>
                                    </tr>

                                <?php } ?>

                            <?php } else if ($select['sexo'] == "m") { ?>

                                <?php if ($select['orientacion'] == "het") { ?>

                                    <?php if (($datos['sexo'] == "h" && $datos['orientacion'] == "het") || ($datos['sexo'] == "h" && $datos['orientacion'] == "bis")) { ?>

                                        <tr>
                                            <td><?php echo $datos['nombre']; ?></td>
                                            <td><?php echo ($datos['sexo'] == "h") ? "Hombre" : "Mujer"; ?></td>
                                            <td>
                                                <?php
                                                if ($datos['orientacion'] == "het") {
                                                    echo "Heterosexual";
                                                } else if ($datos['orientacion'] == "hom") {
                                                    echo "Homosexual";
                                                } else {
                                                    echo "Bisexual";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="pareja" value="<?php echo base64_encode(serialize($datos)); ?>">
                                            </td>
                                        </tr>

                                    <?php } ?>

                                <?php } else if ($select['orientacion'] == "hom") { ?>

                                    <?php if (($datos['sexo'] == "m" && $datos['orientacion'] == "hom") || ($datos['sexo'] == "m" && $datos['orientacion'] == "bis")) { ?>

                                        <tr>
                                            <td><?php echo $datos['nombre']; ?></td>
                                            <td><?php echo ($datos['sexo'] == "h") ? "Hombre" : "Mujer"; ?></td>
                                            <td>
                                                <?php
                                                if ($datos['orientacion'] == "het") {
                                                    echo "Heterosexual";
                                                } else if ($datos['orientacion'] == "hom") {
                                                    echo "Homosexual";
                                                } else {
                                                    echo "Bisexual";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <input type="radio" name="pareja" value="<?php echo base64_encode(serialize($datos)); ?>">
                                            </td>
                                        </tr>

                                    <?php } ?>

                                <?php } else if ($select['orientacion'] == "bis") { ?>

                                    <tr>
                                        <td><?php echo $datos['nombre']; ?></td>
                                        <td><?php echo ($datos['sexo'] == "h") ? "Hombre" : "Mujer"; ?></td>
                                        <td>
                                            <?php
                                            if ($datos['orientacion'] == "het") {
                                                echo "Heterosexual";
                                            } else if ($datos['orientacion'] == "hom") {
                                                echo "Homosexual";
                                            } else {
                                                echo "Bisexual";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <input type="radio" name="pareja" value="<?php echo base64_encode(serialize($datos)); ?>">
                                        </td>
                                    </tr>

                                <?php } ?>

                            <?php } ?>

                        <?php } ?>

                    <?php } ?>

                </table>

                <br>
                <input type="submit" value="Elegir pareja">

            </form>


        <?php } ?>
        </table>




</body>

</html>