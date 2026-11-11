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
            $texto = $_REQUEST["texto"];
            $palabras = explode(" ", $texto);
            $letras = [];
            $max10 = 0;
            $contVocales = 0;

            foreach ($palabras as $valor) {
                $letras[] = str_split($valor);
                if(strlen($valor)>10){
                    $max10++;
                }
            }

            foreach ($letras as $palabra) {
                foreach($palabra as $caracter){
                    if (strtolower($caracter) == "a" || strtolower($caracter) == "e" || strtolower($caracter) == "i" || strtolower($caracter) == "o" || strtolower($caracter) == "u") {
                        $contVocales++;
                    }
                }
            }

            $porcentaje = ((count($palabras)-1)*100)/strlen($texto);
            echo "En el texto hay ". $max10. " palabras que tiene mas de 10 letras";
            echo "<br>En el texto hay ". $contVocales. " vocales";
            echo "<br>El porcentaje de espacios en blanco es: ". round($porcentaje,2). "%";

        }else{
            echo "<h2>Introduzca texto</h2>";
        }
    
    
    ?>
</body>
</html>