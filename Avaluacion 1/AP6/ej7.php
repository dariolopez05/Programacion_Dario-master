<?php

$clas = ["Ana", "Oswaldo", "Raúl", "Celia", "María", "Antonio"];


foreach ($clas as $concursantes) {
    echo $concursantes, "<br>";
}

echo "<br>";

$clas[2] = 'Celia';
$clas[3] = 'Raul';

foreach ($clas as $concursantes) {
    echo $concursantes, "<br>";
}

echo "<br>";

array_pop($clas);

foreach ($clas as $concursantes) {
    echo $concursantes, "<br>";
}

echo "<br>";

array_splice($clas,1,0,["Roberto","Amaya"]);

foreach ($clas as $concursantes) {
    echo $concursantes, "<br>";
}

echo "<br>";

array_unshift($clas, "Marta");

foreach ($clas as $concursantes) {
    echo $concursantes, "<br>";
}

?>