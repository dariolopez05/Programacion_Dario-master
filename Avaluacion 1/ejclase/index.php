<?php

$numeros = [];

for ($i=0; $i < 100; $i++) {
    $rand = rand(0,100); 
    if (($rand % 2) == 0) {
        array_push($numeros, $rand);
    } else {
        $rand++;
        array_push($numeros, $rand);
    }
}

$suma = sumaNums($numeros);
echo $suma . "<br>";
$cien = numsCien($numeros);
echo "Hay $cien numeros 100" . "<br>";
$mayor = numMayor($numeros);
echo "La posicion del numero mayor es la $mayor. <br>";
$cons = numsCons($numeros);
echo "Hay $cons numeros consecutivos." . "<br>";

function sumaNums($arr){
    $suma = 0;

    for ($i=0; $i < count($arr); $i++) { 
        $suma+=$arr[$i];
    }
    return $suma;
}

function numsCien($arr){
    $nums = 0;

    for ($i=0; $i < count($arr); $i++) { 
        if ($arr[$i] == 100) {
            $nums++;
        }
    }
    return $nums;
}

function numMayor($arr){
    $mayor = 0;

    for ($i=0; $i < count($arr); $i++) { 
        if ($arr[$i] >= $mayor) {
            $mayor = $i;
        }
    }
    return $mayor;
}

function numsCons($arr){
    $cons = 0;

    for ($i=0; $i < count($arr)-1; $i++) {
        
        if ($arr[$i] == $arr[$i+1]) {
            $cons++;
        if ($arr[$i] == $arr[$i+2]) {
            $cons--;
        }
    }
}    
return $cons;
}

foreach ($numeros as $nums) {
    echo $nums . "<br>";
}

?>