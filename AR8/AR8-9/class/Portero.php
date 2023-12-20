<?php

class Portero extends Jugador{
    protected $paradas;

    function __construct($nombre, $dorsal, $paradas){
        parent::__construct($nombre, $dorsal);
        $this->paradas = $paradas;
    }

    function getDatos(){
        return $this->nombre . ", " . $this->dorsal . ", " . $this->paradas;
    }
}

?>