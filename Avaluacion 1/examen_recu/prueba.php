<?php
$nums = [1, 2, 4, 5, 0, 0, 1, 0, 3, 0, 0, 0];
//$nums = generarArray();
$horasMejorado = mejorarArray($nums);
var_dump($horasMejorado);

 function mejorarArray($arr) : array{
    $pos = 0;
    for ($i=0; $i < count($arr); $i++) {
         $pos = $i++;
        if ($arr[$i] == 0) {
            if ($arr[$pos] == 0) {
                array_splice($arr, $i, 1);
            }
        }
        
    }
    return $arr;
}
?>