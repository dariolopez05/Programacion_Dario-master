<?php

class Delantero extends Jugador{
    protected $goles;

    function __construct($nombre, $dorsal, $goles){
        parent::__construct($nombre, $dorsal);
        $this->goles = $goles;
    }

    function getDatos(){
        return $this->nombre . ", " . $this->dorsal . ", " . $this->goles;
    }
}

?>