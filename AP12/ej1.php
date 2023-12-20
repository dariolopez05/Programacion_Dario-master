<?php

class Instrumento{
    protected $instrumento;
    protected $musico;
    protected $notas;

    function __construct($instrumento, $musico, $notas){
        $this->instrumento = $instrumento;
        $this->musico = $musico;
        $this->notas = $notas;
    }
}

class Cuerda extends Instrumento{
    protected $cuerdas;

    function __construct($instrumento, $musico, $notas, $cuerdas){
        parent::__construct($instrumento, $musico, $notas);
        $this->cuerdas = $cuerdas;
    }

    function getInfo(){
        echo "El instrumento $this->instrumento es de tipo cuerda y tiene la cantidad de $this->cuerdas cuerdas. <br>";
        echo "Es tocado por $this->musico y tiene $this->notas notas.";
    }
}

class Viento extends Instrumento{
    protected $tipo;

    function __construct($instrumento, $musico, $notas, $tipo){
        $this->tipo = $tipo;
    }

    function getInfo(){
        echo "El instrumento $this->instrumento es de tipo viento y es de la clase $this->tipo. <br>";
        echo "Es tocado por $this->musico y tiene $this->notas notas.";
    }
}

class Percusion extends Instrumento{
    protected $material;

    function __construct($instrumento, $musico, $notas, $material){
        $this->material = $material;
    }

    function getInfo(){
        echo "El instrumento $this->instrumento es de tipo percusion y esta hecho de $this->material . <br>";
        echo "Es tocado por $this->musico y tiene $this->notas notas.";
    }
}

echo "Musical Alcasser <br> ---------------------- <br>";
$guitarra = new Cuerda("Guitarra", "Manolo", 7, 6);
$guitarra->getInfo();

?>