<?php

require_once "datos.php";
require_once "funciones.php";

$nombre = "";

if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
}

$productosFiltrados = filtrarProductos($productos, $nombre);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inventario</title>
</head>

<body>

    <h1>Inventario de productos</h1>

    <form method="GET" action="index.php">

        <label>Buscar producto:</label>

        <input type="text" name="nombre" value="<?php echo $nombre; ?>">

        <input type="submit" value="Buscar">

    </form>

    <h2>Productos</h2>

    <?php if (count($productosFiltrados) == 0) { ?>

        <p>No se han encontrado productos.</p>

    <?php } else { ?>

        <table border="1">

            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Caducidad</th>
                <th>Estado</th>
            </tr>

            <?php foreach ($productosFiltrados as $producto) { ?>

                <tr>

                    <td>
                        <?php echo $producto['nombre']; ?>
                    </td>

                    <td>
                        <?php echo $producto['precio']; ?> €
                    </td>

                    <td>
                        <?php echo $producto['stock']; ?>
                    </td>

                    <td>
                        <?php echo $producto['caducidad']; ?>
                    </td>

                    <td>

                        <?php if ($producto['stock'] == 0) { ?>

                            Agotado

                        <?php } else if (!fechaValida($producto['caducidad'])) { ?>

                            Caducado

                        <?php } else { ?>

                            Disponible

                        <?php } ?>

                    </td>

                </tr>

            <?php } ?>

        </table>

        <h3>
            Valor total del inventario:
            <?php echo number_format(valorInventario($productosFiltrados), 2); ?> €
        </h3>

    <?php } ?>

</body>

</html>