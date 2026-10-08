<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    th,
    td {
        border: black solid 1px;
        border-collapse: collapse;
    }
</style>

<body>

<!-- Crea un array asociativo de productos y precios. Muestra una tabla con producto y precio. Al final muestra el
precio medio y el producto más caro. -->

<?php 
$productos = [
    "Ratón" => 12,
    "Teclado" => 25,
    "Monitor" => 150,
    "Auriculares" => 30,
    "Webcam" => 40
];

$media =0;
$max = $productos["Ratón"];

    foreach($productos as $proc=>$precio){
        $media += $precio;
        if($max<$precio){
            $max = $precio;
        }
    }

?>
<table>
    <tr>
        <td>Producto</td>
        <td>Precio</td>
    </tr>
    <?php 
        foreach ($productos as $proc=>$precio) { 
    ?>
        <tr>
            <td><?php echo $proc;?></td>
            <td><?php echo$precio."€";?></td>
        </tr>
    <?php 
        }
    ?>
    <tr>
        <td>Media</td>
        <td><?php echo round($media/7,2);?></td>
    </tr>
    <tr>
        <td>Mayor precio</td>
        <td><?php echo $max;?></td>
    </tr>
</table>

</body>
</html>