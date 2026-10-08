<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Crea un formulario con varios checkbox de colores usando name="colores[]". Cuando se envíe, muestra los
colores elegidos. Si no se elige ninguno, muestra un aviso. -->

 <form action="ejercicio9.php" method="post">

        <label>Selecciona tus colores favoritos:</label><br>

        <input type="checkbox" name="colores[]" value="Rojo"> Rojo<br>
        <input type="checkbox" name="colores[]" value="Azul"> Azul<br>
        <input type="checkbox" name="colores[]" value="Verde"> Verde<br>
        <input type="checkbox" name="colores[]" value="Amarillo"> Amarillo<br>
        <input type="checkbox" name="colores[]" value="Morado"> Morado<br>

        <br>

        <input type="submit" value="Enviar">

    </form>

<?php 
    if (isset($_POST["colores"])) {
        $colores = $_POST["colores"];
        echo "<p>Has elegido los siguientes colores</p>";
        for ($i=0; $i < count($colores); $i++) { 
            echo "<ul>";
                echo "<li>".$colores[$i]."</li>";
            echo "</ul>";
        }
?>
    
<?php 
    }else{
?>
    <h2>Tienes que seleccionar los colores</h2>
<?php 
    }
?>
</body>
</html>