<?php
require_once("diccionario.php");
if (isset($_COOKIE["diccionario"])) {
    $diccionario = unserialize($_COOKIE["diccionario"]);

    $claves = array_keys($diccionario);
    $palabrasRandom = [];

    for ($i = 0; $i < 5; $i++) {
        do {
            $posicion = rand(0, count($claves) - 1);
            $clave = $claves[$posicion];
        } while (isset($palabrasRandom[$clave]));

        $palabrasRandom[$clave] = $diccionario[$clave];
    }
} else {
    $diccionario = $diccionarioInicial;
    setcookie("diccionario", serialize($diccionario), time() + 3600);
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

    <p>Por favor, introduzca la traduccion al ingles de las siguientes palabras</p>

    <form action="resultado.php" method="post">
        <?php $cont = 1;
        foreach ($palabrasRandom as $key => $value) { ?>
            <?php echo $value ?> <input type="text" name="<?php echo $cont; ?>"> <br>
            <?php $cont++; ?>
        <?php } ?>
        <input type="submit" value="Enviar">
        <input type="hidden" name="palabrasRandom" value="<?php echo base64_encode(serialize($palabrasRandom)); ?>">
    </form>
    <hr>
    <form action="index.php" method="post">
        <input type="submit" value="Jugar otra vez">
    </form>
</body>

</html>