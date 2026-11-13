<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Calcular día de la semana</h1>

    <form action="" method="post">

        <label>Años:</label>
        <input type="number" name="anios" min="0" required>

        <br><br>

        <label>Meses:</label>
        <input type="number" name="meses" min="0" required>

        <br><br>

        <label>Días:</label>
        <input type="number" name="dias" min="0" required>

        <br><br>

        <input type="submit" value="Calcular">

    </form>

    <?php
    if (isset($_REQUEST["anios"]) && isset($_REQUEST["meses"]) && isset($_REQUEST["dias"])) {

        $anios = $_REQUEST["anios"];
        $meses = $_REQUEST["meses"];
        $dias = $_REQUEST["dias"];

        $suma = strtotime("now + ".$anios." year + ".$meses." months + ".$dias." days");
        
        $dia = date("w",$suma);

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