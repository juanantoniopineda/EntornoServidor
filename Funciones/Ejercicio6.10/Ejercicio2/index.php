<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Introduce la fecha</h1>
    <form action="" method="post">

        Hora <input type="text" name="hora"> <br>
        Minutos <input type="text" name="minutos"> <br>
        Segundos <input type="text" name="segundos"> <br><br>

        Formato:
        <select name="formato">
            <option value="H:i:s">15:06:31</option>
            <option value="h:i:s A">03:06:31 PM</option>
            <option value="g:i:s a">3:06:31 pm</option>
            <option value="H:i">15:06</option>
            <option value="h:i A">03:06 PM</option>
            <option value="g:i a">3:06 pm</option>
        </select>

        <input type="submit" name="enviar" value="Enviar">

    </form>

    <?php
    if (isset($_REQUEST["enviar"])) {

        $hora = $_REQUEST["hora"];
        $minutos = $_REQUEST["minutos"];
        $segundos = $_REQUEST["segundos"];

        $formato = $_REQUEST["formato"];

        if ($hora < 0 || $hora > 23 || $minutos < 0 || $minutos > 59 || $segundos < 0 || $segundos > 59) {

            echo "<h2>La hora es incorrecta</h2>";
        } else {

            $fecha = strtotime("$hora:$minutos:$segundos");

            echo date($formato, $fecha);
        }
    }
    ?>

</body>

</html>