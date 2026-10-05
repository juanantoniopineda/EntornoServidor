<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .columnas {
            display: flex;
            gap: 50px;
        }
    </style>
</head>

<body>

    <?php 
        $numeros = [];
        $cuadrado = [];
        $cubo = [];

        for ($i = 0; $i < 20; $i++) {
            $numeros[$i] = rand(0, 100);
            $cuadrado[$i] = $numeros[$i] * $numeros[$i];
            $cubo[$i] = $numeros[$i] * $numeros[$i] * $numeros[$i];
        }

        echo "<div class='columnas'>";

        echo "<div>";
        echo "<h2>Numeros</h2>";
        echo "<ul>";
        foreach($numeros as $num){
            echo "<li>$num</li>";
        }
        echo "</ul>";
        echo "</div>";

        echo "<div>";
        echo "<h2>Cuadrado</h2>";
        echo "<ul>";
        foreach($cuadrado as $num){
            echo "<li>$num</li>";
        }
        echo "</ul>";
        echo "</div>";

        echo "<div>";
        echo "<h2>Cubo</h2>";
        echo "<ul>";
        foreach($cubo as $num){
            echo "<li>$num</li>";
        }
        echo "</ul>";
        echo "</div>";

        echo "</div>";
    ?>

</body>
</html>