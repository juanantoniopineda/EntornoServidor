<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $cont = 0;
    for ($i = 0; $i < 49; $i++) {
        if (isset($_POST["n$i"])) {
            $cont++;
        }
    }

    if ($cont > 6) {
        echo "<p>Has hecho trampas</p>";
        echo "<p>Has seleccionado $cont numeros</p>";
        echo "<p>Solo puedes seleccionar 6</p>";
    } else {
        $g1 = rand(1, 49);
        $g2 = rand(1, 49);
        $g3 = rand(1, 49);
        $g4 = rand(1, 49);
        $g5 = rand(1, 49);
        $g6 = rand(1, 49);
        $serieGanadora = rand(1, 999);

        $aciertos = 0;

        echo "
            <h2>Combinacion Ganadora</h2>
            <table border='1'>
                <tr>
                    <td>$g1</td>
                    <td>$g2</td>
                    <td>$g3</td>
                    <td>$g4</td>
                    <td>$g5</td>
                    <td>$g6</td>
                </tr>
            </table>";

        $cont = 1;
        echo"<table border='1'>";
        for ($i = 0; $i < 5; $i++) {

            echo "<tr>";

            for ($j = 0; $j < 10; $j++) {

                if ($cont <= 49) {
                    if (isset($_POST["n$cont"]) && ($cont == $g1 || $cont == $g2 || $cont == $g3 || $cont == $g4 || $cont == $g5 || $cont == $g6)) {
                        echo "<td style='background-color: lightgreen;'>$cont</td>";
                    } else if (isset($_POST["n$cont"])) {
                        echo "<td style='background-color: black; color: white;'>$cont</td>";
                    } else if ($cont == $g1 || $cont == $g2 || $cont == $g3 || $cont == $g4 || $cont == $g5 || $cont == $g6) {
                        echo "<td style='background-color: red;'>$cont</td>";
                    } else {
                        echo "<td style='background-color: gray;'>$cont</td>";
                    }
                    $cont++;
                }
            }

            echo "</tr>";
        }

        echo "</table>";

        $dinero = 0;

        if ($aciertos < 4) {
            echo "<p>Has ganado: nada</p>";
        } else if ($aciertos == 4) {
            echo "<p>Has ganado: Dinero Vuelto</p>";
        } else if ($aciertos == 5) {
            echo "<p>Has ganado: €</p>";
            $dinero += 30;
        } else if ($aciertos == 6) {
            echo "<p>Has ganado: €</p>";
            $dinero += 100;
        }

        if ($serieGanadora == $_POST["serie"]) {
            echo "<p>Has acertado el numero de serie</p>";
            echo "<p>Premio por serie: 500€</p>";
            $dinero += 500;
        }

        echo "<p>Total ganado: $dinero €</p>";
    }

    ?>
</body>

</html>