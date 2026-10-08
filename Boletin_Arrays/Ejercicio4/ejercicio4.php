<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Crea un array clásico con cinco productos de una lista de compra. Muéstralos en una lista HTML. Añade un
sexto producto usando $array[]. -->

<?php 
    $cesta = ["Platanos","Pan","Patatas","Carne","Pescado"];
    $cesta[] = "Pepino";

    for ($i=0; $i < count($cesta); $i++) { 
    
?>
    <ul>
        <li><?php echo $cesta[$i];?></li>
    </ul>
<?php 
    }
?>
</body>
</html>