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
<!-- Crea un array con cinco nombres. Muéstralos en una tabla con el índice en la primera columna y el nombre
en la segunda. El objetivo es practicar que el primer índice es 0. -->

<table>
    <tr>
        <td>Indice</td>
        <td>Nombre</td>
    </tr>
<?php 
    $nombres = ["Pepe", "Juan", "Gago", "Adrian", "Hugo"];
    for ($i=0; $i < count($nombres); $i++) { 
?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $nombres[$i];?></td>
    </tr>
<?php 
    }
?>

</table>

</body>
</html>