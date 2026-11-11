<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <textarea name="texto"></textarea><br>
        <input type="submit" value="enviar"> 
    </form>
    <br>
    <?php 
        if(isset($_REQUEST["texto"])){
            $texto = trim($_REQUEST["texto"]);
            $palabras = explode(" ", $texto);
            $maxPalabra=  $palabras[0];

            foreach ($palabras as $valor) {
                if(strlen($maxPalabra)< strlen($valor)){
                    $maxPalabra= $valor;
                }
            }

            echo "La posicion de la palabra mas larga es " .mb_stripos($texto, $maxPalabra). " y su longitud es ". strlen($maxPalabra);
        }else{
            echo "<h2>Introduzca texto</h2>";
        }
    
    
    ?>
</body>
</html>