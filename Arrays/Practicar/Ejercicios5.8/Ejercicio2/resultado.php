<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_POST['pedido'])) {
        echo "No hay datos <br>";
        echo "<a href='ejercicio2.php'>Volver</a>";
    } else {
        $pedido = unserialize(base64_decode($_POST['pedido']));

        if (empty($pedido)) {
            echo "No hay datos <br>";
            echo "<a href='ejercicio2.php'>Volver</a>";
        } else {
            foreach ($pedido as $value) {
                echo $value[0] . ": ";

                for ($i=1; $i < count($value); $i++){
                    echo  $value[$i]. ", ";
                }
                echo "<br>";
            }
        }
    }

    ?>
</body>

</html>