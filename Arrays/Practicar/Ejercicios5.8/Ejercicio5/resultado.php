<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(!isset( $_POST['aspirantes'])){
        echo "No hay datos";
    }else{
        echo $_POST['aspirantes'];
    }
        
    ?>
</body>
</html>