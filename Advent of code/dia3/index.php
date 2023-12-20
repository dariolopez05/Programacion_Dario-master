<?php

$cont=fopen("cont.txt", "r") or die("error de lectura");
$datos = [];

while (!feof($cont)) {
    $linea=fgets($cont);
    array_push($datos, $linea);
}

for ($i=0; $i < count($datos); $i++) {  
    $contador = mb_strlen($datos[$i]);
    for ($j=0; $j < $contador; $j++) { 
        if (is_numeric($datos[$i][$j])) {
            echo $datos[$i][$j];
            if (is_numeric($datos[$i][$j++])) {
                echo $datos[$i][$j++];
                if (is_numeric($datos[$i][$j+2])) {
                    echo $datos[$i][$j+2];
                }
            }
            echo "<br>";
        }
    }
}

?>