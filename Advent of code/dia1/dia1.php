<?php

$cont=fopen("cont.txt", "r") or die("error de lectura");
$datos = [];
$nums = [];
$suma = 0;

while (!feof($cont)) {
    $linea=fgets($cont);
    array_push($datos, $linea);
}

for ($i=0; $i < count($datos); $i++) {
    $num = 0;
    $num1 = 0;
    $num2 = 0;
    $arr = [];   
    $contador = mb_strlen($datos[$i]);
    for ($j=0; $j < $contador-2; $j++) { 
        if (is_numeric($datos[$i][$j])) {
            array_push($arr, $datos[$i][$j]);
        }
    }
    if (0 == count($arr)-1) {
        $num = $arr[0] . $arr[0];
        array_push($nums, $num);
    } else {
        $num1 = $arr[0];
        $num2 = $arr[count($arr)-1];
        $num = $num1 . $num2;
        array_push($nums, $num);
    }
}

for ($i=0; $i < count($nums); $i++) { 
    $suma+=$nums[$i];
}

echo $suma;
?>