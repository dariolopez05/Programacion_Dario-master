<?php

$tiempo = $_POST['tiempo'];
$domingo = $_POST['domingo'];
$hora = $_POST['hora'];

if ($tiempo <= 5) {
    $precio = $tiempo * 1;
} elseif ($tiempo <= 8) {
    $precio = (($tiempo - 5) * 0.8) + 5;
} elseif ($tiempo <= 10) {
    $precio = (($tiempo - 8) * 0.7) + 7.4;
} elseif ($tiempo > 10) {
    $precio = (($tiempo - 10) * 0.5) + 8.8;
}

if ($domingo == "si") {
    $total = $precio + (3 * $precio /100);
    echo "El precio por ser domingo es de $total €";
} elseif ($hora == "tarde") {
    $total = $precio + (10 * $precio /100);
    echo "El precio por llamar por la tarde es de $total €";
} elseif ($hora == "mañana") {
    $total = $precio + (15 * $precio /100);
    echo "El precio por llamar por la mañana es de $total €";
} 
?>