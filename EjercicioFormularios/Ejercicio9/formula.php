<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $r = $_GET['radio'];
        $a = $_GET['altura'];
        $resultado = (1*3.14*($r*$r)*$a)/3;
        echo "El volumen de tu cono es ". $resultado. "cm3";
    
    ?>
</body>
</html>