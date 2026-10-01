<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php 
            for ($i=1; $i < 11; $i++) { 

                echo "<table border='1'>";

                echo "
                    <caption>Bloque $i</caption>
                    <tr>
                        <td>Bloque</td>
                        <td>Piso</td>
                        <td>Accion</td>
                    </tr>
                ";

                for ($j=1; $j < 8; $j++) { 
                    
                        echo"<tr>
                            <td>$i</td>
                            <td>$j</td>
                            <td>
                                <form action='piso.php' method='post'>
                                <input type='hidden' name='bloque' value='$i'>
                                <input type='hidden' name='piso' value='$j'>
                                <input type='submit' value='Llamar'>
                                </form>
                            </td>
                        </tr>";
                        

                }
                echo"</table>";
                echo"<br><br>";
            }
        ?>
</body>
</html>