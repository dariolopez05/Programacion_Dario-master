<?php

$tipo = $_POST["tipo"];
$tamaño = $_POST["tamaño"];

if ($tipo == "A") {
    if($tamaño == 1) {
        echo "Añadir 20 centimos al precio/kg";
    }elseif($tamaño == 2) {
        echo "Añadir 30 centimos al precio/kg";
    }else{
        echo "Datos mal introducidos";
        }
}elseif ($tipo == "B") {
    if($tamaño == 1) {
        echo "Descontar 30 centimos al precio/kg";
    }elseif($tamaño == 2) {
        echo "Descontar 50 centimos al precio/kg";
    }else{
        echo "Datos mal introducidos";
    }
}
else{
    echo "Datos mal introducidos";
}

?>