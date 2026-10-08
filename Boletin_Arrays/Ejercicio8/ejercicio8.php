<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Mediante formulario, pide cinco notas de un alumno usando campos name="notas[]". En PHP recoge
$_POST["notas"] como array y calcula media, nota máxima y nota mínima. -->
<form action="ejercicio8.php" method="post">
    <label>Nota 1</label>
    <input type="number" name="notas[]">
    <label>Nota 2</label>
    <input type="number" name="notas[]">
    <label>Nota 3</label>
    <input type="number" name="notas[]">
    <label>Nota 4</label>
    <input type="number" name="notas[]">
    <label>Nota 5</label>
    <input type="number" name="notas[]">
    <button>Eenviar</button>
</form>

<?php 
    if (isset($_POST["notas"])) {
        $notas = $_POST["notas"];
        $media =0;
        $min =$notas[0];
        $max =$notas[0];

        for ($i=0; $i < count($notas); $i++) { 
             $media += $notas[$i];
             if($min > $notas[$i]){
                $min=  $notas[$i];
             }else if($max < $notas[$i]){
                $max=  $notas[$i];
             }
        }
?>
    <p>La nota media es <?php echo round($media/count($notas));?></p>
    <p>La nota maxima es un <?php echo $max;?></p>
    <p>La nota minima es un <?php echo $min;?></p>
<?php 
    }else{
?>
    <h2>Introduce las notas</h2>
<?php 
    }
?>
</body>
</html>