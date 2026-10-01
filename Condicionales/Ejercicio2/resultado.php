<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $g1 = rand(1,49);
        $g2 = rand(1,49);
        $g3 = rand(1,49);
        $g4 = rand(1,49);
        $g5 = rand(1,49);
        $g6 = rand(1,49);
        $serieGanadora = rand(1,999);

        $aciertos = 0;

        if(isset($_POST["n$g1"])){
            $aciertos++;
        }
        
        if(isset($_POST["n$g2"])){
            $aciertos++;
        }
        
        if(isset($_POST["n$g3"])){
            $aciertos++;
        }
        
        if(isset($_POST["n$g4"])){
            $aciertos++;
        }
        
        if(isset($_POST["n$g5"])){
            $aciertos++;
        }
        
        if(isset($_POST["n$g6"])){
            $aciertos++;
        }

        echo "
            <h2>Combinacion Ganadora</h2>
            <table border='1'>
                <tr>
                    <td>$g1</td>
                    <td>$g2</td>
                    <td>$g3</td>
                    <td>$g4</td>
                    <td>$g5</td>
                    <td>$g6</td>
                </tr>
            </table>
            <br>
            <p>Has tenido $aciertos aciertos.</p>
            ";
        
        $dinero=0;

        if($aciertos<4){
            echo "<p>Has ganado: nada</p>";
        }else if($aciertos==4){
            echo "<p>Has ganado: Dinero Vuelto</p>";
        }else if($aciertos==5){
            echo "<p>Has ganado: €</p>";
            $dinero+=30;
        }else if($aciertos==6){
            echo "<p>Has ganado: €</p>";
            $dinero+=100;
        }

        if($serieGanadora == $_POST["serie"]){
            echo "<p>Has acertado el numero de serie</p>";
            echo "<p>Premio por serie: 500€</p>";
            $dinero+=500;
        }

        echo "<p>Total ganado: $dinero €</p>";
    ?>
</body>
</html>