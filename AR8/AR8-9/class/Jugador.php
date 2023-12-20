<?php

abstract class Jugador{
    protected $nombre;
    protected $dorsal;

    function __construct($nombre, $dorsal){
        $this->nombre = $nombre;
        $this->dorsal = $dorsal;
    }

}

?>