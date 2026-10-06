<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php 
        $productos =[["nombre"=> "Raton", "precio"=>12, "stock"=>5],
                     ["nombre"=> "Teclado", "precio"=>25, "stock"=>0]];

        
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead> 

    <?php 
        $cont = 0;
        for ($i=0; $i < count($productos); $i++) { 
            
            echo "<tr>
                    <td>" . $productos[$i]["nombre"] . "</td>
                    <td>" . $productos[$i]["precio"] . "</td>";
                    
                
            if($productos[$i]["stock"]==0){
                echo "<td style='color:red'>" . $productos[$i]["stock"] . "</td>";
            }else{
                echo "<td>" . $productos[$i]["stock"] . "</td>";
            }
            $cont += $productos[$i]["stock"];
            echo "</tr>";
        }
    ?>
        <tr>
            <td colspan="2">Precio stock</td>
            <td><?php echo $cont;?></td>
        </tr>

    </table>

</body>

</html>