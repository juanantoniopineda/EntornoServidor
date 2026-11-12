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
        Dia <input type="text" name="dia"> <br>
        Mes <input type="text" name="mes"> <br>
        Año <input type="text" name="anio"> <br> <br>
        Formato:
        <select name="formato">
            <option value="d/m/Y">02/09/2018</option>
            <option value="j/n/y">2/9/18</option>
            <option value="d-m-Y">02-09-2018</option>
            <option value="Y/m/d">2018/09/02</option>
            <option value="Y-m-d">2018-09-02</option>
            <option value="j-n-Y">2-9-2018</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_REQUEST["dia"]) && isset($_REQUEST["mes"]) && isset($_REQUEST["formato"]) && isset($_REQUEST["anio"])) {
        $dia = $_REQUEST["dia"];
        $mes = $_REQUEST["mes"];
        $anio = $_REQUEST["anio"];
        $formato = $_REQUEST["formato"];
        if (!is_numeric($dia) || !is_numeric($mes) || !is_numeric($anio) || !checkdate($mes, $dia, $anio)) {
            echo "<h2>La fecha la has introducio mal</h2>";
        } else {
            $fecha = strtotime("$dia-$mes-$anio");
            echo date($formato, $fecha);
        }
    }
    ?>

</body>

</html>