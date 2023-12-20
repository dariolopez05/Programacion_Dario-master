<?php

$personas = $_POST["personas"];
if (($personas > 200) and ($personas <= 300)){
    echo "El coste por plato es de 85€";
}elseif ($personas > 300) {
    echo "El coste por plato es de 75€";
}else {
    echo "El coste por plato es de 95€";
}

?>