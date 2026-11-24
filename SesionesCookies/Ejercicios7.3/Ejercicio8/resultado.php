<?php
$palabrasRandom = unserialize(base64_decode($_REQUEST['palabrasRandom']));
$cont = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($palabrasRandom as $key => $value) {
        if ($key == $_REQUEST[$cont]) {
            echo $value . ": " . $_REQUEST[$cont] . " - correcto <br>";
        } else {
            echo $value . ": " . $_REQUEST[$cont] . " - incorrecto, la respuesta correcta es " . $key . "  <br>";
        }
        $cont++;
    } ?>
    <hr>
    <form action="index.php" method="post">
        <input type="submit" value="Jugar otra vez">
    </form>
</body>

</html>