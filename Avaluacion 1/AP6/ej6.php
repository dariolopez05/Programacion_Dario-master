<?php

$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
$dias = ["Enero"=>'31', "Febrero"=>'28', "Marzo"=>'31', "Abril"=>'30', "Mayo"=>'31', "Junio"=>'30', "Julio"=>'31', "Agosto"=>'31', "Septiembre"=>'30', "Octubre"=>'31', "Noviembre"=>'30', "Diciembre"=>'31'];
$contador = 1;

while ($contador <= 10) {
    $mes = $meses[random_int(0,11)];
    $dia = $dias["$mes"];
    $diarand = random_int(1, $dia);

    echo "Fecha $contador: $diarand de $mes de 2023. <br>";
    $contador++;
}

?>