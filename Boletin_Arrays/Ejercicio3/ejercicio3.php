<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Genera 20 números aleatorios entre 0 y 50. Muestra todos los números y después indica cuántos son pares
y cuántos son impares. -->

<?php 
    $numeros = [];
    $par = 0;
    $impar = 0;
    for ($i=0; $i < 20; $i++) { 
        $numeros[$i] = rand(0,50);
        echo $numeros[$i], " ";
        if($numeros[$i]%2 == 0){
            $par++;
        }else{
            $impar++;
        }
    }

    echo "<p>Hay ".$par." numeros pares y ". $impar." numeros impares</p>";

?>
    
</body>
</html>