<?php
session_start();

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [];
}

if (isset($_REQUEST["id"])) {

    $id = $_REQUEST["id"];

    if (isset($_SESSION["carrito"][$id])) {
        $_SESSION["carrito"][$id]["cantidad"]++;
    } else {
        $_SESSION["carrito"][$_REQUEST["id"]] = [
            "precio" => $_REQUEST["precio"],
            "imagen" => $_REQUEST["imagen"],
            "nombre" => $_REQUEST["nombre"],
            "cantidad" => 1
        ];
    }
}

if (isset($_REQUEST["idEliminar"])) {
    $idEliminar = $_REQUEST["idEliminar"];
    $_SESSION["carrito"][$idEliminar]["cantidad"]--;
    if($_SESSION["carrito"][$idEliminar]["cantidad"] == 0){
        unset($_SESSION["carrito"][$idEliminar]);
    }
}

if (isset($_REQUEST["id"]) || isset($_REQUEST["idEliminar"])) {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Tienda on-line <u>La Estilografica</u></h1>
    <div class="container">
        <div class="container__products">
            <p>Productos</p>
            <hr>
            <div class="producto1">
                <img src="https://appelboom.com/image/catalog/Pelikan/souveran/Black-gold/souveraen_black_gold_vulpen.png" alt="producto1">
                <p>Pelikan Souveran M-1000</p>
                <p>Precio: 545 €</p>
                <form action="" method="post">
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="precio" value="545">
                    <input type="hidden" name="imagen" value="https://appelboom.com/image/catalog/Pelikan/souveran/Black-gold/souveraen_black_gold_vulpen.png">
                    <input type="hidden" name="nombre" value="Pelikan Souveran M-1000">
                    <input type="submit" value="Comprar">
                </form>
            </div>
            <div class="producto2">
                <img src="https://appelboom.com/image/catalog/Parker/01.%20Duofold/Duofold%20Classic%20Black%20P.T/parker-duofold-classic-black-pt-fountain-pen-closed.jpg" alt="producto2">
                <p>Parker Duofold International</p>
                <p>Precio: 406 €</p>
                <form action="" method="post">
                    <input type="hidden" name="id" value="2">
                    <input type="hidden" name="precio" value="406">
                    <input type="hidden" name="imagen" value="https://appelboom.com/image/catalog/Parker/01.%20Duofold/Duofold%20Classic%20Black%20P.T/parker-duofold-classic-black-pt-fountain-pen-closed.jpg">
                    <input type="hidden" name="nombre" value="Parker Duofold International">
                    <input type="submit" value="Comprar">
                </form>
            </div>
            <div class="producto3">
                <img src="https://d1gprtr7wrqvgr.cloudfront.net/uploads/products/600x450/Visconti%20Van%20Gogh%20Wheatfield%20Under%20Thunderclouds%20Vulpen.webp" alt="producto3">
                <p>Visconti Van Gogh</p>
                <p>Precio: 180 €</p>
                <form action="" method="post">
                    <input type="hidden" name="id" value="3">
                    <input type="hidden" name="precio" value="180">
                    <input type="hidden" name="imagen" value="https://d1gprtr7wrqvgr.cloudfront.net/uploads/products/600x450/Visconti%20Van%20Gogh%20Wheatfield%20Under%20Thunderclouds%20Vulpen.webp">
                    <input type="hidden" name="nombre" value="Visconti Van Gogh">
                    <input type="submit" value="Comprar">
                </form>
            </div>
        </div>
        <div class="container__carrito">
            <p>Carrito</p>
            <hr>

            <?php
            $total = 0;
            foreach ($_SESSION["carrito"] as $id => $producto) {
            ?>
                <div>
                    <img src="<?= $producto["imagen"] ?>" alt="<?= $producto["nombre"] ?>">
                    <p><?= $producto["nombre"] ?></p>
                    <p>Precio: <?= $producto["precio"] ?> €</p>
                    <p>Unidades: <?= $producto["cantidad"] ?> </p>
                    <?php $total += $producto["cantidad"]*$producto["precio"];?>
                    <form action="" method="post">
                        <input type="hidden" name="idEliminar" value="<?= $id ?>">
                        <input type="submit" value="Eliminar">
                    </form>
                    <form action="detalles.php" method="post">
                        <input type="hidden" name="idDetalle" value="<?= $id ?>">
                        <input type="submit" value="Detalles">
                    </form>
                </div>
            <?php
            }
            ?>
            <?php if($total != 0){?>
                <p>Total: <?php echo $total ?></p>
            <?php }?>
        </div>
    </div>
</body>

</html>