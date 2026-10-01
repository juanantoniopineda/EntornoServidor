<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina el personaje</title>

    <style>
        .tablero {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            width: 300px; 
            margin-bottom: 20px; 
        }

        .tablero div {
            background-color: gray;
            width: 100px;
            height: 100px;
            border: 1px solid black;
            box-sizing: border-box; 
        }

        a {
            display: block;
            width: 100%;
            height: 100%;
            text-align: center;
            font-size: 50px;
            text-decoration: none;
            color: purple;
            line-height: 100px;
        }

    </style>
</head>
<body>
    <?php 

    if (isset($_GET["cont"])) {
        $cont = $_GET["cont"];
    } else {
        $cont = 0;
    }

    echo"<h1>Adivina el personaje</h1>
        <p>Intentos: $cont</p>
        
        <div class='tablero'>  
        <div><a href='mostrar.php?parte=1&cont=$cont'>?</a></div>  
        <div><a href='mostrar.php?parte=2&cont=$cont'>?</a></div>  
        <div><a href='mostrar.php?parte=3&cont=$cont'>?</a></div>  
 
        <div><a href='mostrar.php?parte=4&cont=$cont'>?</a></div>  
        <div><a href='mostrar.php?parte=5&cont=$cont'>?</a></div>  
        <div><a href='mostrar.php?parte=6&cont=$cont'>?</a></div>  
 
        <div><a href='mostrar.php?parte=7&cont=$cont'>?</a></div>  
        <div><a href='mostrar.php?parte=8&cont=$cont'>?</a></div>  
        <div><a href='mostrar.php?parte=9&cont=$cont'>?</a></div>  
        </div>  
  
        <form action='resultado.php?cont=$cont' method='post'>  
            <label for='nombre'>Introduzca el nombre</label>  
            <input type='text' name='nombre'> <br>  
            <input type='hidden' name='cont' value='$cont'>
            <input type='submit'>  
        </form>"; 
    ?> 
</body>
</html>
