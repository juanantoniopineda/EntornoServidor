<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Horario del dia de la semana</h2>
    <form action="horario.php" method="post">
        <label for="dia">Dia de la semana: </label>
        <select name="dia">
            <option value="lunes">Lunes</option>
            <option value="martes">Martes</option>
            <option value="miercoles">Miercoles</option>
            <option value="jueves">Jueves</option>
            <option value="viernes">Viernes</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

    <?php
    $dia = $_POST["dia"] ?? 'x';
    switch ($dia) {
        case "lunes":
            echo "<ul>
                        <li>DWES</li>
                        <li>DWES</li>
                        <li>DIW</li>
                        <li>DIW</li>
                        <li>PI</li>
                        <li>PI</li>
                    </ul>";
            break;
        case "martes":
            echo "<ul>
                        <li>DWES</li>
                        <li>DWES</li>
                        <li>IPE II</li>
                        <li>IPE II</li>
                        <li>DWEC</li>
                        <li>DWEC</li>
                    </ul>";
            break;
        case "miercoles":
            echo "<ul>
                        <li>DAW</li>
                        <li>DAW</li>
                        <li>ING</li>
                        <li>ING</li>
                        <li>DWEC</li>
                        <li>DWEC</li>
                    </ul>";
            break;
        case "jueves":
            echo "<ul>
                        <li>OPT</li>
                        <li>DWES</li>
                        <li>DWES</li>
                        <li>DIW</li>
                        <li>DIW</li>
                        <li>DIW</li>
                    </ul>";
            break;
        case "viernes":
            echo "<ul>
                        <li>OPT</li>
                        <li>OPT</li>
                        <li>DWEC</li>
                        <li>DWEC</li>
                        <li>DWES</li>
                        <li>IPE II</li>
                    </ul>";
            break;
        default:
            echo "<br> Seleccione un dia de la semana";
    }
    ?>

</body>

</html>