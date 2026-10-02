<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $parte = $_GET["parte"];

        for ($i=1; $i < 10; $i++) { 
            if ($parte == $i) {
                echo "<img src='img/luffy$i.jpg'>";
            }
        }

    ?>
    <script>

    setTimeout(function() {
        window.location.href = "ejercicio6.php";
    }, 2000);

</script>

</body>
</html>