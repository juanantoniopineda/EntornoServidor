<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Loteria Primitiva</h1>
    <h3>Seleciona 6 numeros</h3>
    <form action="resultado.php" method="post">
        <table border="1">
            <?php
            $cont = 1;
            for ($i = 0; $i < 5; $i++) {

                echo "<tr>";

                for ($j = 0; $j < 10; $j++) {

                    if ($cont <= 49) {
                        echo "<td><input type='checkbox' name='n$cont' value='$cont'> $cont</td>";
                        $cont++;
                    }
                }

                echo "</tr>";
            }
            ?>
        </table>
        <br><br>
        <label for="serie">Numero de serie:</label>
        <input type="number" max="999" min="1" name="serie">
        <br><br>
        <input type="submit" value="Jugar">
    </form>
</body>

</html>