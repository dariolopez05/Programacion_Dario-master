<?php

$mes = 1;
$dinero = $_POST['dinero'];
$total = 0;

while ($mes < 12) {
    echo "Este mes has ahorrado $dinero €". '<br>';
    $mes++;
    $total = $dinero + $total;
    echo "En total este año llevas $total €". '<br>';
}

?>