<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $kb = $_GET['kb'];

        echo "La conversion de ". $kb . " Kb a Mb es la siguiente: ". ($kb/1024);
    ?>
</body>
</html>