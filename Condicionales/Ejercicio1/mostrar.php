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
        if ($parte == 1) {
             echo "<img src='img/luffy1.jpg'>";
        }

        if ($parte == 2) {
            echo "<img src='img/luffy2.jpg'>";
        }

        if ($parte == 3) {
            echo "<img src='img/luffy3.jpg'>";
        }

        if ($parte == 4) {
            echo "<img src='img/luffy4.jpg'>";
        }

        if ($parte == 5) {
            echo "<img src='img/luffy5.jpg'>";
        }

        if ($parte == 6) {
            echo "<img src='img/luffy6.jpg'>";
        }

        if ($parte == 7) {
            echo "<img src='img/luffy7.jpg'>";
        }

        if ($parte == 8) {
            echo "<img src='img/luffy8.jpg'>";
        }

        if ($parte == 9) {
            echo "<img src='img/luffy9.jpg'>";
        }

    ?>
    <script>

    setTimeout(function() {
        window.location.href = "ejercicio1.php";
    }, 2000);

</script>

</body>
</html>