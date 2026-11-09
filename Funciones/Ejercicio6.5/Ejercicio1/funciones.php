<?php
function combinacion(array $apuesta): array
{
    $comprobacion = [];

    foreach ($apuesta["combinacion"] as $num) {
        if ($num != "") {
            $comprobacion[] = $num;
        }
    }

    $apuesta["combinacion"] = $comprobacion;

    if (count($apuesta["combinacion"]) === 6 && $apuesta["serie"] != "") {
        return $apuesta;
    } else {
        if (count($apuesta["combinacion"]) < 6) {
            for ($i = count($apuesta["combinacion"]); $i < 6; $i++) {
                $num = 0;

                do {
                    $num = rand(1, 49);
                } while (in_array($num, $apuesta["combinacion"]));

                $apuesta["combinacion"][] = $num;
            }
        }

        if ($apuesta["serie"] == "") {
            $apuesta["serie"] = rand(1, 999);
        }
    }

    return $apuesta;
}

function imprimeApuesta(array $apuesta, string $texto): string
{
    if ($texto == "") {
        $texto = "Combinación generada para la Primitiva";
    }

    $tabla = '<table border="1">
                <tr>
                    <th colspan="6">' . $texto . '</th>
                </tr>
                <tr>';
                    foreach ($apuesta["combinacion"] as $num) {
                        $tabla .= '<td>' . $num . '</td>';
                    }
    $tabla .= '</tr>
                </table>';

    return $tabla;
}

?>