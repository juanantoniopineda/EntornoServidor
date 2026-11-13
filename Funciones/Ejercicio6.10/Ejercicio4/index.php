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

        $dia = date("d", $date);
        $mes = date("m", $date);
        $anio = date("Y", $date);

        switch ($mes) {
            case 1:
                $mes = "enero";
                break;
            case 2:
                $mes = "febrero";
                break;
            case 3:
                $mes = "marzo";
                break;
            case 4:
                $mes = "abril";
                break;
            case 5:
                $mes = "mayo";
                break;
            case 6:
                $mes = "junio";
                break;
            case 7:
                $mes = "julio";
                break;
            case 8:
                $mes = "agosto";
                break;
            case 9:
                $mes = "septiembre";
                break;
            case 10:
                $mes = "octubre";
                break;
            case 11:
                $mes = "noviembre";
                break;
            case 12:
                $mes = "diciembre";
                break;
        }

        echo $dia . " de " . $mes . " de " . $anio;
    }
    ?>
</body>

</html>