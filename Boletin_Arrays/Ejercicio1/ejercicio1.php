<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    th,
    td {
        border: black solid 1px;
        border-collapse: collapse;
    }
</style>

<body>

<!-- Crea un array con las temperaturas medias de siete días. Muestra una tabla con dos columnas: Día y
Temperatura. Al final muestra la temperatura media semanal. Usa foreach. -->

    <?php
    $semana = [
        "Lunes" => 17,
        "Martes" => 22,
        "Miercoles" => 21,
        "Jueves" => 15,
        "Viernes" => 10,
        "Sabado" => 24,
        "Domingo" => 20
    ];

    $media = 0;

    echo "<table>
                <tr>
                    <td>Dia</td>
                    <td>Temperatura</td>
                </tr>
            ";

    foreach ($semana as $dia => $temp) {
        echo "<tr>
                    <td>$dia</td>
                    <td>$temp</td>
                </tr>";
        $media += $temp;
    }
    echo "  <tr>
                <td>Media</td>
                <td>" . round(($media / 7),2) . "</td>
            </tr>
        </table>";

    ?>
</body>

</html>