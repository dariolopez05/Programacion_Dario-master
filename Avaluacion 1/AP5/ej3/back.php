<?php

$alumnos = $_POST['alumnos'];

if ($alumnos >= 100){
    $total = ($alumnos * 65);
    echo "Cada alumno tendra que pagar 65€, y en total deberan pagar $total € a la compañia de viajes."  ;
} elseif (($alumnos > 50) and ($alumnos < 100)) {
    $total = ($alumnos * 70);
    echo "Cada alumno tendra que pagar 70€, y en total deberan pagar $total € a la compañia de viajes."  ;
} elseif (($alumnos > 30) and ($alumnos < 50)) {
    $total = ($alumnos * 95);
    echo "Cada alumno tendra que pagar 95€, y en total deberan pagar $total € a la compañia de viajes."  ;
} elseif ($alumnos < 30) {
    echo "Al ser menos de 30 alumnos en total deberan pagar 4000€ compañia de viajes."  ;
} else {
    echo "Datos mal introducidos";
}

?>