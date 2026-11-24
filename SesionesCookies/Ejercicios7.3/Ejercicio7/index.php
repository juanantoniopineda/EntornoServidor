<?php
if (isset($_REQUEST["color"])) {
    $color = $_REQUEST["color"];
    setcookie("color", $color, time() + 10);
} else if (isset($_COOKIE["color"])) {
    $color = $_COOKIE["color"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: <?php echo $color ?>;
    }
</style>

<body>
    <h1>Cambia el color de fondo</h1>
    <form action="" method="post">
        <select name="color">
            <option value="blue" <?php if ($color == "blue") echo "selected"; ?>>Azul</option>
            <option value="green" <?php if ($color == "green") echo "selected"; ?>>Verde</option>
            <option value="yellow" <?php if ($color == "yellow") echo "selected"; ?>>Amarillo</option>
            <option value="red" <?php if ($color == "red") echo "selected"; ?>>Rojo</option>
            <option value="purple" <?php if ($color == "purple") echo "selected"; ?>>Morado</option>
            <option value="white" <?php if ($color == "white") echo "selected"; ?>>Blanco</option>
            <option value="pink" <?php if ($color == "pink") echo "selected"; ?>>Rosa</option>
        </select>
        <input type="submit" value="Enviar">
    </form>



    <?php if (!isset($color)) { ?>
        <p>Introduzca un color</p>
    <?php } else { ?>
        <p>Ahora el fondo esta de color <?php echo $color; ?></p>
    <?php } ?>

</body>

</html>