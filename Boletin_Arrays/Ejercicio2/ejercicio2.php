<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,tr,td{
        border: solid black 1px;
        border-collapse: collapse;
    }
</style>
<body>
<!-- 
Genera 12 números aleatorios entre 1 y 20. Guárdalos en un array. Muestra una tabla con tres columnas:
número, cuadrado y cubo. No crees tres arrays distintos; calcula cuadrado y cubo al mostrar. -->
    <?php 
        $numeros = [];
        
        for ($i=0; $i < 12; $i++) { 
            $numeros[$i] = rand(1,20);
        }
    ?>
    <table>
        <tr>
            <td>Numero</td>
            <td>Cuadrado</td>
            <td>Cubo</td>
        </tr>
        <?php 
            for ($i=0; $i < 12; $i++) { 
                echo "<tr>";
                    echo "<td> $numeros[$i]</td>
                        <td>". pow($numeros[$i],2)."</td>
                        <td>".pow($numeros[$i],3)."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>