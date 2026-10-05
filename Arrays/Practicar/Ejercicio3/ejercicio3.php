<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_POST['n'])) {
            $cont = $_POST['cont'];
            $numeroTexto = $_POST['numeroTexto'] . " ". $_POST['n'];
        } else {
            $cont=0;
            $numeroTexto = "";
        }

        
        if($cont == 15){
            $numeroTexto = substr($numeroTexto, 1);
            $numeros = explode(" ", $numeroTexto);
            $ultimo = $numeros[14];
            
            for ($i = 14; $i > 0; $i--) {
                $numeros[$i] = $numeros[$i - 1];
            }

            $numeros[0] = $ultimo;

            foreach($numeros as $num){
                echo "<p>$num</p>";
            }


        }else{
    ?>

        <form action="ejercicio3.php" method="post">
            Introduzca un número:
            <input type="number" name="n" autofocus>
            <input type="hidden" name="cont" value="<?= ++$cont ?>">
            <input type="hidden" name="numeroTexto" value="<?= $numeroTexto ?>">
            <input type="submit" value="OK">
        </form>

    <?php 
   
        }
    ?>
</body>
</html>