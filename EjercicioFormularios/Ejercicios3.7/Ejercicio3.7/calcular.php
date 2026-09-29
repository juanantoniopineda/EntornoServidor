<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculo del volumen de un cilindro</h1>
    <img src="https://significado.com/wp-content/uploads/Cilindro.png" alt="cilindro">
    <br>
    <?php 
        $a = $_GET['altura'];
        $r = $_GET['radio'];

        echo "El resultado es el siguiente: ", round((pi()*($r*$r)*$a),2);
    ?>

</body>
</html>