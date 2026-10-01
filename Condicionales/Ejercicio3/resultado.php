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
        $cont = $_GET["cont"];

        if(strtolower($nombre) == "luffy"){
            echo "
                <h1>¡Has acertado!</h1>

                <p>¡Enhorabuena! Has adivinado la imagen.</p>

                <p>Has tardado $cont intentos</p>

                <img src='img/luffy.jpg' width='300'>
                ";
        }else{
            echo "
                <h1>Has fallado</h1>

                <p>Intentalo de nuevo.</p>

                <p>Llevas $cont intentos</p>

                <a href='ejercicio3.php?cont=$cont'>Volver</a>
                ";
        }
    ?>
</body>
</html>