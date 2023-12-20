<?php

$partidos = [];
$resultados = ["1", "2", "x"];
$anoInicial=1980;

for ($i=0; $i <= 19; $i++) { 
    $partidos[$i]['año'] = $anoInicial;
    $partidos[$i]['resultado'] = $resultados[rand(0,2)];
    $anoInicial++;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "El madrid gana " ,ganaMadrid($partidos), " partidos.", "<br>";
    echo "El barça gana " ,ganaBarça($partidos), " partidos.", "<br>";
    echo "Empatan " ,empate($partidos), " partidos.", "<br>";
    echo puntos($partidos);
    echo "<br>";
}

function ganaMadrid ($datos) {
    $madrid = 0;
    for ($i=0; $i <= 19; $i++) { 
        if ($datos[$i]['resultado'] == "1") {
            $madrid++;
        }
    }
    return $madrid;
}

function ganaBarça ($datos) {
    $barça = 0;
    for ($i=0; $i <= 19; $i++) { 
        if ($datos[$i]['resultado'] == "2") {
            $barça++;
        }
    }
    return $barça;
}

function empate ($datos) {
    $empate = 0;
    for ($i=0; $i <= 19; $i++) { 
        if ($datos[$i]['resultado'] == "x") {
            $empate++;
        }
    }
    return $empate;
}

function puntos ($datos) {
    $puntBarça = 0;
    $puntMadrid = 0;

    for ($i=0; $i <= 19; $i++) { 
        if ($datos[$i]['resultado'] == "1") {
            if ($datos[$i]['año'] <= 1990) {
                $puntMadrid=+2;
            } elseif ($datos[$i]['año'] > 1990) {
                $puntMadrid=+3;
            } 
        } elseif ($datos[$i]['resultado'] == "2") {
            if ($datos[$i]['año'] <= 1990) {
                $puntBarça=+2;
            } elseif ($datos[$i]['año'] > 1990) {
                $puntBarça=+3;
            } 
        }
    }

    $puntBarça=+empate($datos);
    $puntMadrid=+empate($datos);

    return($puntBarça);
    return($puntMadrid);
}

var_dump($partidos);

?>