<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numeros = [];

        for ($i = 0; $i < 100; $i++) {
            $numeros[$i] = rand(0, 20);
        }
    ?>

    <form action="ejercicio4.php" method="post">
        <label for="num1">Numero a cambiar:</label>
        <input type="number" name="num1">
        <label for="num2">Nuevo numero:</label>
        <input type="number" name="num2">
        <input type="submit" value="enviar">
    </form>

    <?php 
        if(isset($_POST["num1"]) && isset($_POST["num2"])){
            for ($i = 0; $i < 100; $i++) {
                if($numeros[$i] == $_POST["num1"]){
                    echo "<span style='color:red''>".$_POST["num2"]."</span> ";
                }else{
                    echo "$numeros[$i] ";
                }
            }
        }else{
            echo"<p>Aqui se va a mostrar el resultado</p>";
        }
        
    ?>

</body>
</html>