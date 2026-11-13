<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Biblioteca Online</h1>

    <form action="" method="post">

        <label>Fecha del préstamo:</label>
        <input type="date" name="fecha" max="<?php echo date('Y-m-d'); ?>" required>

        <br><br>

        <input type="submit" value="Comprobar devolución">

    </form>

    <?php
    if (isset($_REQUEST["fecha"])) {
        $fecha = $_REQUEST["fecha"];
        $dias = floor((strtotime("now")-strtotime($fecha)) /(60 * 60 * 24 ));

        if($dias <=15){
            echo "Devolución realizada con éxito";
        }else{
            $retraso = ($dias-15)*2;
            echo "Tienes que abonar ".$retraso." euros";
        }
    }
    ?>
</body>

</html>