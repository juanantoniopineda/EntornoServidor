<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nombre = $_POST["nombre"] ?? "x";
        if(strtolower($nombre) == "luffy"){
            echo "
                <h1>¡Has acertado!</h1>

                <p>¡Enhorabuena! Has adivinado la imagen.</p>

                <img src='img/luffy.jpg' width='300'>
                ";
        }else{
            echo "
                <h1>Has fallado</h1>

                <p>Intentalo de nuevo.</p>

                <a href='ejercicio1.php'>Volver</a>
                ";
        }
    ?>
</body>
</html>