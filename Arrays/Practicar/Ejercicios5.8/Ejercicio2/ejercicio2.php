<?php
$comidas = [
    "Pizza" => ["Jamón", "Atún", "Bacon", "Pepperoni"],
    "Hamburguesa" => ["Lechuga", "Tomate", "Queso"],
    "Perrito caliente" => ["Lechuga", "Cebolla", "Patata"]
];

if (!isset($_REQUEST['pedido'])) {
    $pedido = [];
} else {
    $pedido = unserialize(base64_decode($_REQUEST['pedido']));
    if (isset($_REQUEST['comida']) && isset($_REQUEST['ingredientes'])) {
        $comida = [];
        $comida[] = $_REQUEST['comida'];

        for ($i = 0; $i < count($_REQUEST['ingredientes']); $i++) {
            $comida[] = $_REQUEST['ingredientes'][$i];
        }

        $pedido[] = $comida;
    }
}

$pedidoTexto = base64_encode(serialize($pedido));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($comidas as $key => $value) { ?>
        <form action="" method="post">
            <h1><?php echo $key; ?></h1>
            <p>Selecciona los ingredientes:</p>
            <?php for ($i = 0; $i < count($value); $i++) { ?>
                <input type="checkbox" name="ingredientes[]" value="<?php echo $value[$i]; ?>"> <?php echo $value[$i]; ?><br>
            <?php } ?>
            <br>
            <input type="hidden" name="pedido" value="<?php echo $pedidoTexto; ?>">
            <input type="hidden" name="comida" value="<?php echo $key; ?>">
            <input type="submit" value="Añadir al pedido">
        </form>
        <hr>
    <?php } ?>

    <form action="resultado.php" method="post">
        <h1>Finalizar pedido</h1>
        <p>Cuando hayas añadido todas las comidas, pulsas el botón de finalizar y se muestra el resumen.</p>
        <input type="hidden" name="pedido" value="<?php echo $pedidoTexto; ?>">
        <input type="submit" value="Añadir al pedido">
    </form>
</body>

</html>