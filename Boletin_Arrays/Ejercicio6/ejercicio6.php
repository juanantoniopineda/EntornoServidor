<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Crea un array asociativo donde la clave sea una extensión de archivo y el valor sea una descripción: php,
html, css, js, sql, jpg. Mediante un formulario, pide una extensión y muestra su descripción. Si no existe,
muestra “Extensión no encontrada”. -->

<?php

    $extensiones = [
        "php" => "Página web dinámica",
        "html" => "Estructura de una página web",
        "css" => "Estilos de una página web",
        "js" => "JavaScript",
        "sql" => "Base de datos",
        "jpg" => "Imagen"
    ];

?>

<form action="ejercicio6.php" method="post">
    <label for="extension">Introduce una extension</label>
    <input type="text" name="extension">
    <button>Enviar</button>
</form>

<?php 
    $bandera = true;
    if(isset($_POST["extension"])){
        foreach($extensiones as $ext => $des){
            if($ext == $_POST["extension"]){
                echo "<p>".$des."</p>";
                $bandera = false;
            }
        }
        if($bandera){
            echo "<p>Extensión no encontrada</p>";
        }
    }else{
        echo "<p>Se monstrara el resultado aqui</p>";
    }
?>

</body>
</html>