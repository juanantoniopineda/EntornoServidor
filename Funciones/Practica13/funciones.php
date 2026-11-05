<?php

function coincideNombre(string $nombre, array $datos): bool
{
    if ($nombre == $datos['nombre']) {
        return true;
    }

    return false;
}


function filtrarProductos(array $productos, string $nombre): array
{
    $filtrados = [];

    foreach ($productos as $producto) {

        if ($nombre == "" || coincideNombre($nombre, $producto)) {
            $filtrados[] = $producto;
        }

    }

    return $filtrados;
}


function valorInventario(array $productos): float
{
    $total = 0;

    foreach ($productos as $producto) {
        $total = $total + ($producto['precio'] * $producto['stock']);
    }

    return $total;
}


function fechaValida(string $fecha): bool
{
    $hoy = date("Y-m-d");

    if ($fecha < $hoy) {
        return false;
    }

    return true;
}

?>