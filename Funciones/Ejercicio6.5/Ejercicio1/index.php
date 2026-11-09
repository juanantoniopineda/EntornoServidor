<?php
require_once "funciones.php";

if (!isset($_REQUEST["apuesta"])) {
    $apuesta = [];
    $bandera = false;
} else {
    $apuesta = unserialize(base64_decode($_REQUEST["apuesta"]));
    $bandera = true;

    $comprobacion = [];

    foreach ($_REQUEST["combinacion"] as $num) {
        if ($num != "" && in_array($num, $comprobacion)) {
            $bandera = false;
        }

        $comprobacion[] = $num;
    }

    if ($bandera) {
        $apuesta = [
            "combinacion" => $_REQUEST["combinacion"],
            "serie" => $_REQUEST["serie"]
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Primitiva</title>
</head>

<body>

    <?php if (!$bandera) { ?>

        <form action="" method="post">

            Numero 1 <input type="text" name="combinacion[]"><br>
            Numero 2 <input type="text" name="combinacion[]"><br>
            Numero 3 <input type="text" name="combinacion[]"><br>
            Numero 4 <input type="text" name="combinacion[]"><br>
            Numero 5 <input type="text" name="combinacion[]"><br>
            Numero 6 <input type="text" name="combinacion[]"><br>

            Serie <input type="text" name="serie"><br>

            Texto (Opcional) <input type="text" name="texto"><br>

            <input type="hidden" name="apuesta"
                value="<?php echo base64_encode(serialize($apuesta)); ?>">

            <button type="submit">Enviar</button>

        </form>

        <?php if (isset($_REQUEST["apuesta"]) && !$bandera) { ?>
            <p>Has introducido números repetidos.</p>
        <?php } ?>

    <?php } else{?>
        <?php $resultadoFinal = combinacion($apuesta);
              echo imprimeApuesta($resultadoFinal,$_REQUEST["texto"]);
        ?>
    <?php }?>

</body>
</html>
