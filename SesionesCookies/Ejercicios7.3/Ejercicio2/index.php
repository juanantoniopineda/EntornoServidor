<?php
session_start();
$bandera = true;

if (!isset($_REQUEST["numero"])) {
    $_SESSION['array'] = [];
} else {
    if ($_REQUEST["numero"] < 0) {

        $_SESSION["contTotal"] = 0;
        $_SESSION["sumaImpares"] = 0;
        $_SESSION["contImpar"] = 0;
        $_SESSION["mayorPar"] = 2;

        foreach ($_SESSION['array'] as $numeros) {
            if ($numeros % 2 != 0) {
                $_SESSION["sumaImpares"] += $numeros;
                $_SESSION["contImpar"]++;
            } else {
                if ($numeros < $_SESSION["mayorPar"]) {
                    $_SESSION["mayorPar"] = $numeros;
                }
            }

            $_SESSION["contTotal"]++;
        }
        $bandera = false;
    } else {
        $_SESSION['array'][] = $_REQUEST["numero"];
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

    <?php if ($bandera) { ?>
        <form action="" method="post">
            <h1>Introduce numeros</h1>
            <p>Cuando quieras parar introduce un numero negativo</p>
            Introduce Numero:<input type="text" name="numero" require>
            <input type="submit" value="Enviar">
        </form>
    <?php } else {
        echo "Se han introducido ".$_SESSION["contTotal"]. " numeros <br>" ;
        echo "La media de los numeros impares es ". ($_SESSION["sumaImpares"]/$_SESSION["contImpar"]). "<br>";
        echo "Y el numero par mayor es ". $_SESSION["mayorPar"]."<br>";
    } ?>

</body>
</html>