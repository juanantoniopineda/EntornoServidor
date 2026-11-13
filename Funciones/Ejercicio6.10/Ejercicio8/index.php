<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Comparar dos personas</h1>

    <form action="" method="post">

        <h3>Primera persona</h3>

        <label>Nombre:</label>
        <input type="text" name="nombre1" required>

        <br><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha1" required>

        <h3>Segunda persona</h3>

        <label>Nombre:</label>
        <input type="text" name="nombre2" required>

        <br><br>

        <label>Fecha de nacimiento:</label>
        <input type="date" name="fecha2" required>

        <br><br>

        <input type="submit" value="Comparar edades">

    </form>

    <?php
    if (isset($_REQUEST["nombre1"]) && isset($_REQUEST["fecha1"]) && isset($_REQUEST["nombre2"]) && isset($_REQUEST["fecha2"])) {

        $nombre1 = $_REQUEST["nombre1"];
        $fecha1 = strtotime($_REQUEST["fecha1"]);

        $diferencia1 = strtotime("now") -$fecha1;

        $nombre2 = $_REQUEST["nombre2"];
        $fecha2 = strtotime($_REQUEST["fecha2"]);

        $diferencia2 = strtotime("now") -$fecha2;

        $edad1 = floor($diferencia1 / (60 * 60 * 24 * 365.25));
        $edad2 = floor($diferencia2 / (60 * 60 * 24 * 365.25));

        echo $nombre1 ." tiene ".$edad1. " años <br>";
        echo $nombre2 ." tiene ".$edad2. " años <br>";
        
        if($edad1>$edad2){
            echo $nombre1." es el mayor";
        }else{
            echo $nombre2." es el mayor";
        }
    }
    ?>
</body>

</html>