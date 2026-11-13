<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Calcular edad en una fecha futura</h1>

    <form action="" method="post">

        <label>Fecha de nacimiento:</label>
        <input type="date" name="nacimiento" required>

        <br><br>

        <label>Fecha futura:</label>
        <input type="date" name="futura" required>

        <br><br>

        <input type="submit" value="Calcular edad">

    </form>

    <?php
    if (isset($_REQUEST["nacimiento"]) && isset($_REQUEST["futura"])) {

        $nacimiento = $_REQUEST["nacimiento"];
        $futura = $_REQUEST["futura"];

        $fecha1 = strtotime($nacimiento);
        $fecha2 = strtotime( $futura);

        $diferencia = $fecha2 - $fecha1;

        $edad = $diferencia / (60 * 60 * 24 * 365.25);

        echo "Tendrias ". $edad. " años"; 
    }
    ?>
</body>

</html>