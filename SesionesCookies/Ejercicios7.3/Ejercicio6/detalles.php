<?php
require_once("productos.php");
$idDetalle = $_REQUEST["idDetalle"];
$productoDetalle = $productos[$idDetalle];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 30px;
        font-family: Arial, sans-serif;
        background-color: #eeeeee;
        color: #222222;
    }

    h1 {
        text-align: center;
        color: #202735;
        margin-bottom: 30px;
    }

    img {
        display: block;
        width: 300px;
        height: 300px;
        object-fit: contain;
        margin: 0 auto 25px;
        background-color: white;
        border-radius: 8px;
    }

    p {
        max-width: 700px;
        margin: 15px auto;
        line-height: 1.6;
        font-size: 16px;
    }

    p:first-of-type {
        font-weight: bold;
        font-size: 20px;
        color: #202735;
    }
</style>

<body>
    <h1><?= $productoDetalle["nombre"] ?></h1>

    <img src="<?= $productoDetalle["imagen"] ?>" alt="<?= $productoDetalle["nombre"] ?>">

    <p>Precio: <?= $productoDetalle["precio"] ?> €</p>

    <p><?= $productoDetalle["descripcion"] ?></p>

    <form action="index.php" method="post">
        <input type="hidden" name="id" value="<?= $idDetalle ?>">
        <input type="hidden" name="precio" value="<?= $productoDetalle["precio"] ?>">
        <input type="hidden" name="imagen" value="<?= $productoDetalle["imagen"] ?>">
        <input type="hidden" name="nombre" value="<?= $productoDetalle["nombre"] ?>">
        <input type="submit" value="Añadir al carrito">
    </form>

</body>

</html>