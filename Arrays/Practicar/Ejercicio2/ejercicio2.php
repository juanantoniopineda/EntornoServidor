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

        
        if($cont == 10){
            $numeroTexto = substr($numeroTexto, 1);
            $numeros = explode(" ", $numeroTexto);
            $maximo = $numeros[0];
            $minimo = $numeros[0];

            for ($i = 1; $i < 10; $i++) {
                if ($numeros[$i] > $maximo) {
                    $maximo = $numeros[$i];
                }

                if ($numeros[$i] < $minimo) {
                    $minimo = $numeros[$i];
                }
            }
            
            for ($i = 0; $i < 10; $i++) {
                echo $numeros[$i];

                if ($numeros[$i] == $maximo) {
                     echo " máximo";
                }

                if ($numeros[$i] == $minimo) {
                    echo " mínimo";
                }

                echo "<br>";
            }

        }else{
    ?>

        <form action="ejercicio2.php" method="post">
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