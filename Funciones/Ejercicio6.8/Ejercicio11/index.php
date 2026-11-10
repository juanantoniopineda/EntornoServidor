<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Número romano</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>M</td>
            <td>1000</td>
        </tr>
        <tr>
            <td>D</td>
            <td>500</td>
        </tr>
        <tr>
            <td>C</td>
            <td>100</td>
        </tr>
        <tr>
            <td>L</td>
            <td>50</td>
        </tr>
        <tr>
            <td>X</td>
            <td>10</td>
        </tr>
        <tr>
            <td>I</td>
            <td>1</td>
        </tr>
    </table>

    <h2>Introduzca el numero en romano a calcular</h2>

    <form action="" method="post">
        <input type="text" name="letras">
        <button type="submit">Enviar</button>
    </form>

    <?php
        $romanos = [
            "M" => 1000,
            "D" => 500,
            "C" => 100,
            "L" => 50,
            "X" => 10,
            "I" => 1
        ];

        if(isset($_REQUEST["letras"])){
            $bandera = true;
            $valor = 0;
            $array = str_split($_REQUEST["letras"]);

            foreach ($array as $letra) {
                if(!isset($romanos[$letra])){
                    $bandera = false;
                }else{
                    $valor += $romanos[$letra];
                }
            }

            if(!$bandera){
                echo "<h3> Has introducido caracteres incorrectos </h3>";
            }else{
                echo "<h3> El resultado de ".$_REQUEST["letras"]." es: ".$valor."</h3>"; 

            }
        }
    ?>
</body>

</html>