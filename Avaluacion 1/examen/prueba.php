<?php

$tami = 0

for ($y=0; $y < $tami; $y++) {
    $tami2 = count($impacts[$y]);
    $sero = 0;
    $pos1 = $impacts[$y][$sero];
    $pos2 = $impacts[$y][$sero+1];
    if ($pomodoroHaters[$pos1][$pos2] == "A") {
        array_splice($pomodoroHaters[$pos1], $pos2 ,1 ,"C");
        $thabitado++;
    } 
}

?>