<?php

$horas = $_POST['horas'];
$sh = 5;
$total = $horas*6;
$sueldo = $total*$sh;

echo "Esta semana has trabajado $total horas y has ganado $sueldo €";

?>