<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <select name="dia" id="dia">
            <option value="monday">Lunes</option>
            <option value="tuesday">Martes</option>
            <option value="wednesday">Miércoles</option>
            <option value="thursday">Jueves</option>
            <option value="friday">Viernes</option>
            <option value="saturday">Sábado</option>
            <option value="sunday">Domingo</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_REQUEST["dia"])) {
        $dia = $_REQUEST["dia"];
        $proximoDia = strtotime("next " . $dia);

        echo "El próximo " . $dia . " será el " . date("d/m/Y",$proximoDia);
    }
    ?>
</body>

</html>