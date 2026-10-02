<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table>
    <?php

        $fila = $_GET["fila"] ?? '11';
        $colum = $_GET["colum"] ?? '11';

        for ($i=0; $i < 10; $i++) { 
            echo "<tr>";

            for ($j=0; $j < 10; $j++) { 
                echo "<td>";
                echo "<a href='ejercicio5.php?fila=$i&colum=$j'>";
                if ($i == $fila && $j == $colum) {
                    echo "<img src='img/ojo-abierto.jpg' width='40'>";
                } else {
                    echo "<img src='img/ojo-cerrado.jpg' width='40'>";
                }
                echo "</a>";
                echo "</td>";
            }

            echo "</tr>";
        }
    ?>
</table>

</body>
</html>