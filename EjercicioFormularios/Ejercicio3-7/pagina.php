<?php 
    $color = $_GET['color'];
    $fuente = $_GET['letra'];
    $alineacion = $_GET['alineacion'];
    $banner = $_GET['banner'];
    $tamano = $_GET['tamanio'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    background-color: <?php echo $color; ?>;
    font-family: <?php echo $fuente; ?>;
    text-align: <?php echo $alineacion; ?>;
    font-size: <?php echo $tamanio; ?>px;
}

img {
    width: 20%;
    height: 200px;
}

</style>
<body> 
    <img src="<?php echo $banner; ?>">

        <h1>MI PÁGINA WEB</h1>

        <p>Esta es mi página personalizada.</p>

        <p>El texto aparece centrado y con el tipo de letra elegido.</p>
</body>
</html>