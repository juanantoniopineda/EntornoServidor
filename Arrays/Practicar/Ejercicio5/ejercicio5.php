<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    echo "<h1>Introduzca las temperatura de ese año</h1>";
    echo "<form method='post'>";

    foreach ($meses as $mes) {
        echo "<label for='$mes'>$mes</label>";
        echo "<input type='number' name='$mes'>";
        echo "<br>";
    }

    echo "<input type='submit' value='enviar'>";
    echo "</form>";

    if (isset($_POST["Enero"])) {

        $temperatura = array(
            "Enero" => $_POST["Enero"],
            "Febrero" => $_POST["Febrero"],
            "Marzo" => $_POST["Marzo"],
            "Abril" => $_POST["Abril"],
            "Mayo" => $_POST["Mayo"],
            "Junio" => $_POST["Junio"],
            "Julio" => $_POST["Julio"],
            "Agosto" => $_POST["Agosto"],
            "Septiembre" => $_POST["Septiembre"],
            "Octubre" => $_POST["Octubre"],
            "Noviembre" => $_POST["Noviembre"],
            "Diciembre" => $_POST["Diciembre"]
        );

        foreach ($temperatura as $mes => $temp) {
            echo "$mes: ";
            for ($i = 0; $i < $temp; $i++) {
                echo "*";
            }

            echo " $temp ºC";
            echo "<br>";
        }
    } else {
        echo "<p>Se mostrar ahora un grafico</p>";
    }


    ?>
</body>

</html>