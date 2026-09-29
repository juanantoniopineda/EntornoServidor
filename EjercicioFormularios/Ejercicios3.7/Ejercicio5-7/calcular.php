<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $diametro = $_GET['diametro'];
        $altura = $_GET['altura'];
        $caudal = $_GET['caudal'];
        $radio = $diametro/2;
        $volumen = pi()*$radio*$radio*$altura;
        $tiempo= ($volumen*1000)/$caudal;
        $horas = intdiv($tiempo, 60);
        $minutos = $tiempo % 60;

        echo "Tiempo de llenado: ". $horas. " horas y ".  $minutos. " minutos";
    ?>
</body>
</html>