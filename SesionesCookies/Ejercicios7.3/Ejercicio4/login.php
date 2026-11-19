<?php 
    session_start();

    if(!isset($_SESSION["logueado"])){
        $_SESSION["logueado"] = false;
    }

    if(isset($_POST["cerrar"])){
        $_SESSION["logueado"] = false;
        header("Location: login.php");
        exit;
    }

    if($_SESSION["logueado"] == true){
        header("Location: ejercicio1.php");
        exit;
    }


    if(isset($_REQUEST["usuario"]) && isset($_REQUEST["contrasenia"])){
        if($_REQUEST["usuario"] == "usuario" && $_REQUEST["contrasenia"] == "usuario"){
          $_SESSION["logueado"] = true;
          header("Location: ejercicio1.php");
        }else{
            header("Location: login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <p>Introduce tus datos para acceder al ejercicio</p>
    <form action="" method="post">
        Nombre de usuario <input type="text" name="usuario"> <br>
        Contraseña <input type="password" name="contrasenia" > <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>