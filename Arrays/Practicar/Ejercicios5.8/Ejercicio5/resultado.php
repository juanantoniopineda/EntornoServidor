<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_POST['aspirantes'])) {
        echo "No hay datos <br>";
        echo "<a href='ejercicio5.php'>Volver</a>";
    } else {
        $aspirantes = unserialize(base64_decode($_POST['aspirantes']));

        if (empty($aspirantes)) {
            echo "No hay datos <br>";
            echo "<a href='ejercicio5.php'>Volver</a>";
        } else {
            foreach ($aspirantes as $nombre => $datos) {
                if($datos['edad']>=30){
                    echo "<span style='color: red;'>";
                    echo "Nombre: " . $nombre . "<br>";
                    echo "Edad: " . $datos['edad'] . "<br>";
                    echo "Años de experiencia: " . $datos['anio'] . "<br>";
                    echo "Correo: " . $datos['correo'] . "<br>";
                    echo "<hr>";
                    echo "</span>";
                }else{
                    echo "Nombre: " . $nombre . "<br>";
                    echo "Edad: " . $datos['edad'] . "<br>";
                    echo "Años de experiencia: " . $datos['anio'] . "<br>";
                    echo "Correo: " . $datos['correo'] . "<br>";
                    echo "<hr>";
                }
            }
        }
    }

    ?>
</body>

</html>