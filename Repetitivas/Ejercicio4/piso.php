<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $piso = $_POST["piso"];
        $bloque = $_POST["bloque"];
        echo "<p>Usted ha llamado al piso $piso del bloque $bloque </p>"
    ?>
</body>
</html>