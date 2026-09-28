<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
    border-collapse: collapse;
    margin: 20px auto;
    font-family: Arial;
}

th, td {
    border: 1px solid #ccc;
    padding: 10px 20px;
    text-align: center;
}

th {
    background: #eee;
}
</style>
<body>
    <?php 
        $tienda1 = $_GET['tienda1'];
        $tienda2 = $_GET['tienda2'];
        $tienda3 = $_GET['tienda3'];
        $media = ($tienda1+$tienda2+$tienda3)/3;
    ?>

    <table>
        <caption>PRECIOS DEL PRODUCTO</caption>
        <tr>
            <td colspan="3">COMPARACIÓN DE PRECIOS</td>
        </tr>
        <tr>
            <td>Tienda</td>
            <td>Precio</td>
            <td>Diferencia media</td>
        </tr>
        <tr>
            <td>Tienda 1</td>
            <td><?php echo round($tienda1,2)?></td>
            <td><?php echo round($media-$tienda1,2) ?></td>
        </tr>
        <tr>
            <td>Tienda 2</td>
            <td><?php echo round($tienda2,2)?></td>
            <td><?php echo round($media-$tienda2,2) ?></td>
        </tr>
        <tr>
            <td>Tienda 3</td>
            <td><?php echo round($tienda3,2) ?></td>
            <td><?php echo round($media-$tienda3,2) ?></td>
        </tr>
        <tr>
            <td colspan="2">PRECIO MEDIO</td>
            <td><?php echo round($media,2)?></td>
        </tr>
    </table>
</body>
</html>