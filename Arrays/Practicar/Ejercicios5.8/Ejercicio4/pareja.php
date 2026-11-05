<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $pareja1 =unserialize(base64_decode($_REQUEST['select']));
        $pareja2 =unserialize(base64_decode($_REQUEST['pareja']));
        echo $pareja1['nombre'] . " ahora es pareja de ". $pareja2['nombre'];
    ?>
</body>
</html>