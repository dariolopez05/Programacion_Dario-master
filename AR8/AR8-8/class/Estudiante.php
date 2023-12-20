<?php

class Estudiante{
    protected $nombre;
    private $nota;

    function __construct($nombre, $nota){
        $this->nombre = $nombre;
        $this->nota = $nota;
    }

    function setter($nombre, $nota){
        $this->nombre = $nombre;
        $this->nota = $nota;
        if ($this->nota > 10) {
            $this->nota = 10;
        } elseif ($this->nota < 0) {
            $this->nota = 0;
        }
    }

    function getter(){
        if ($this->nota > 10) {
            $this->nota = 10;
        } elseif ($this->nota < 0) {
            $this->nota = 0;
        }
        return "El alumno $this->nombre ha sacado un $this->nota.";
    }
}

?>