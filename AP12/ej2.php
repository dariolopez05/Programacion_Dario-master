<?php

abstract class Persona{
    protected string $nombre;
    protected string $direccion;

    function __construct($nombre, $direccion){
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }

    //abstract function getPropiedades(); Esto obliga a utilizar esta funcion en todas las clases heredadas
}

class Estudiante extends Persona{
    private $nif;
    private $fechaAlta;
    private $edad;

    function __construct($nombre, $direccion, $nif, $fechaAlta, $edad){
        parent::__construct($nombre, $direccion);
        $this->nif = $nif;
        $this->fechaAlta = $fechaAlta;
        $this->edad = $edad;
    }

    function getPropiedades(){
        return $this->nombre . " || " . $this->direccion . " || " . $this->nif . " || " . $this->fechaAlta . " || " . $this->edad;
    }
}

class EstudianteIbtercambio extends Estudiante{
    private $paisOrigen;

    function __construct($nombre, $direccion, $nif, $fechaAlta, $edad, $paisOrigen){
        parent::__construct($nombre, $direccion, $nif, $fechaAlta, $edad);
        $this->paisOrigen = $paisOrigen;
    }
}

class Profesor extends Persona{
    private $numSS;
    private $titulacion;
    private $especialidad;

    function __construct($nombre, $direccion, $numSS, $titulacion, $especialidad){
        parent::__construct($nombre, $direccion);
        $this->numSS = $numSS;
        $this->titulacion = $titulacion;
        $this->especialidad = $especialidad;
    }
}

class PersonalGestion extends Persona{
    private $numSS;
    private $posicion;

    function __construct($nombre, $direccion, $numSS, $posicion){
        parent::__construct($nombre, $direccion);
        $this->numSS = $numSS;
        $this->posicion = $posicion;
    }
}

/*
$pers1 = new Persona("Juan", "Alcasser");
echo "PERSONAS: <br>";
echo $pers1->getPropiedades();
echo "<br> <br>";
*/
$est1 = new Estudiante("Juan", "Alcasser", "327237", "2 de marzo", "32");
echo "ESTUDIANTE: <br>";
echo $est1->getPropiedades();
echo "<br> <br>";

?>