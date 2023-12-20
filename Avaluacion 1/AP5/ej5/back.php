<?php

$tipo = $_POST['tipo'];
$personas = $_POST['personas'];
$km = $_POST['km'];

if ($tipo == "a") {
    if ($personas < 20) {
        $precio = 2 * $km;
        $total = $precio * 20;
        echo "El precio por persona es de $precio €, y en total el viaje costara $total €";
    } elseif ($personas >= 20) {
        $precio = 2 * $km;
        $total = $precio * $personas;
        echo "El precio por persona es de $precio €, y en total el viaje costara $total €";
    } else {
        echo "Datos mal introducidos";
    }
} elseif ($tipo == "b") {
    if ($personas < 20) {
        $precio = 2.5 * $km;
        $total = $precio * 20;
        echo "El precio por persona es de $precio €, y en total el viaje costara $total €";
    } elseif ($personas >= 20) {
        $precio = 2.5 * $km;
        $total = $precio * $personas;
        echo "El precio por persona es de $precio €, y en total el viaje costara $total €";
    } else {
        echo "Datos mal introducidos";
    }
} elseif ($tipo == "c") {
    if ($personas < 20) {
        $precio = 3 * $km;
        $total = $precio * 20;
        echo "El precio por persona es de $precio €, y en total el viaje costara $total €";
    } elseif ($personas >= 20) {
        $precio = 3 * $km;
        $total = $precio * $personas;
        echo "El precio por persona es de $precio €, y en total el viaje costara $total €";
    } else {
        echo "Datos mal introducidos";
    }
} else {
    echo "Datos mal introducidos";
}
?>