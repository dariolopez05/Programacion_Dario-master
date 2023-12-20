<?php

$num1 = 0;
$num2 = 1;
$num3 = 0;

while ($num3 < 100) {
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
    echo "$num3 <br>";
}

?>