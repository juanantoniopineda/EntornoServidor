<?php

function dameTarjeta(string $perfil): array
{
    // Array asociativo bidimensional: Administrador
    $administrador = [
        1 => ['A' => 123, 'B' => 456, 'C' => 789, 'D' => 987, 'E' => 654],
        2 => ['A' => 234, 'B' => 567, 'C' => 890, 'D' => 321, 'E' => 432],
        3 => ['A' => 111, 'B' => 222, 'C' => 333, 'D' => 444, 'E' => 555],
        4 => ['A' => 666, 'B' => 777, 'C' => 888, 'D' => 999, 'E' => 124],
        5 => ['A' => 122, 'B' => 133, 'C' => 144, 'D' => 155, 'E' => 166]
    ];

    // Array asociativo bidimensional: Usuario estándar
    $usuarioEstandar = [
        1 => ['A' => 155, 'B' => 255, 'C' => 355, 'D' => 455, 'E' => 555],
        2 => ['A' => 144, 'B' => 244, 'C' => 344, 'D' => 444, 'E' => 544],
        3 => ['A' => 133, 'B' => 233, 'C' => 333, 'D' => 433, 'E' => 533],
        4 => ['A' => 189, 'B' => 289, 'C' => 389, 'D' => 489, 'E' => 589],
        5 => ['A' => 175, 'B' => 275, 'C' => 375, 'D' => 475, 'E' => 575]
    ];

    if ($perfil == "administrador") {
        return $administrador;
    }else{
        return $usuarioEstandar;
    }
}


function compruebaClave(array $matriz, int $fila, string $col, int $valor): bool
{

    // foreach ($matriz as $f => $c) {
    //     if($fila == $f){
    //         foreach ($c as $letra => $val) {
    //            if($col == $letra){
    //                 if($valor == $val){
    //                     return true;
    //                 }
    //            }
    //         }
    //     }
    // }

    if (isset($matriz[$fila][$col]) && $matriz[$fila][$col] == $valor) {
        return true;
    }

    return false;

}

function imprimeTarjeta(string $usuario): string {
    $tarjeta = dameTarjeta($usuario);

    $tabla= '<table border="1" cellpadding="5" cellspacing="0">
            <caption><strong>';
    $tabla .= $usuario;
    $tabla .=  "</strong></caption>";
    $tabla .=  "<thead>
        <tr>
            <th></th>
            <th>A</th>
            <th>B</th>
            <th>C</th>
            <th>D</th>
            <th>E</th>
        </tr>
    </thead>";

    foreach ($tarjeta as $f => $c) {
        $tabla .= "<tbody> <tr>";
        $tabla .=  "<th>". $f ."</th>";
        foreach ($c as $letra => $val) {
            $tabla .=  "<td>". $val ."</td>";
        }
        $tabla .= "</tr>";
    }

    $tabla .= "</tbody></table>";

    return $tabla;
}

?>