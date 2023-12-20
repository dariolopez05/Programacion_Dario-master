<?php

$num = 0;
$limite = 100;

while ($num <= $limite){
    if (($num % 2) == 0){
        echo "$num <br>";
        $num++;
    } else {
        $num++;
    }
}

?>