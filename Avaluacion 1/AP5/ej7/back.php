<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if ($n1 < 0) {
    echo "$n1 es menor que <br>0 ";
} elseif ($n1 == 0) {
    echo "$n1 es igual a 0 <br>";
} elseif ($n1 > 0) {
    echo "$n1 es mayor que 0 <br>";
}

if ($n2 < 0) {
    echo "$n2 es menor que 0";
} elseif ($n2 == 0) {
    echo "$n2 es igual a 0";
} elseif ($n2 > 0) {
    echo "$n2 es mayor que 0";
}

?>