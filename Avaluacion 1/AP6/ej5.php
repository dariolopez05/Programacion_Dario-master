<?php


$jugador1 = 0;
$jugador2 = 0;
$contador = 1;

while ($contador < 6) {
    $dado = random_int(1,6);
    $dado2 = random_int(1,6);
    $jugador1 += $dado;
    $jugador2 += $dado2;
    echo "Turno $contador jugador1 = $dado jugador2 = $dado2 <br>";
    $contador ++;
}

if ($jugador1 < $jugador2) {
    echo "Gana jugador2";
} else {
    echo "Gana jugador1";
}

?>