<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Introduzca la fecha: <input type="date" name="fecha"> <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_REQUEST["fecha"])) {
        $fecha = $_REQUEST["fecha"];
        $date = strtotime($fecha);
        $dia = date("w", $date);

        switch ($dia) {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miércoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "Sábado";
                break;
            case 7:
                echo "Domingo";
                break;
        }
    }

    ?>
</body>

</html>