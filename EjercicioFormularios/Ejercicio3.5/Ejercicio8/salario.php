<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $salario = $_GET['horas']*12;
        echo "Has ganado ". $salario. "€";
    ?>
</body>
</html>