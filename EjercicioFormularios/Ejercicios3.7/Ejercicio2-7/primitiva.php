<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado de la Primitiva</h1>
    <?php 
        $n1 = $_GET['numero1'];
        $n2 = $_GET['numero2'];
        $n3 = $_GET['numero3'];
        $n4 = $_GET['numero4'];
        $n5 = $_GET['numero5'];
        $n6 = $_GET['numero6'];
        $serie = $_GET['serie'];


        echo "Tuyos N1: " . $n1 . " | N2: " . $n2 . " | N3: " . $n3 . " | N4: " . $n4 . " | N5: " . $n5 . " | N6: " . $n6 . " | Serie: " . $serie;
        echo "<br>";
        echo "Generado N1: " . rand(1, 49) . " | N2: " . rand(1, 49) . " | N3: " . rand(1, 49) . " | N4: " . rand(1, 49) . " | N5: " . rand(1, 49) . " | N6: " . rand(1, 49) . " | Serie: " . rand(1, 999);
        
    ?>
</body>
</html>