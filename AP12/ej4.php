<?php

abstract class Info{
    protected $referencia;
    protected $titulo;

    function __construct($referencia, $titulo){
        $this->referencia = $referencia;
        $this->titulo = $titulo;
    }
}

class Obra extends Info{
    protected $autor;
    protected $numPags;

    function __construct($referencia, $titulo, $autor, $numPags){
        parent::__construct($referencia, $titulo);
        $this->autor = $autor;
        $this->numPags = $numPags;
    }

    function getDatos(){
        return $this->autor . " || " . $this->titulo . " || " . $this->referencia . " || " . $this->numPags; 
    }
}

class Volumen extends Obra{
    protected $numVol;

    function __construct($referencia, $titulo, $autor, $numPags, $numVol){
        parent::__construct($referencia, $titulo, $autor, $numPags);
        $this->numVol = $numVol;
    }

    function getDatos(){
        return $this->autor . " || " . $this->titulo . " || " . $this->referencia . " || " . $this->numPags . " || " . $this->numVol; 
    }
}

class Revista extends Info{
    protected $anyoPub;
    protected $numRev;

    function __construct($referencia, $titulo, $anyoPub, $numRev){
        parent::__construct($referencia, $titulo);
        $this->anyoPub = $anyoPub;
        $this->numRev = $numRev;
    }    

    function getDatos(){
        return $this->referencia . " || " . $this->titulo . " || " . $this->anyoPub . " || " . $this->numRev;
    }
}

$ob1 = new Obra(23, "Patatapasion", "Tony", 576);
echo "Obra <br> -------------------- <br>";
echo $ob1->getDatos() . "<br>" . "<br>";

$vol1 = new Volumen(45, "dolset", "Patata", 876, 3);
echo "Volumen <br> -------------------- <br>";
echo $vol1->getDatos() . "<br>" . "<br>";

$rev1 = new Revista(67, "Almusafes", 2002, 15);
echo "Revista <br> -------------------- <br>";
echo $rev1->getDatos() . "<br>" . "<br>";

?>
<form method="POST" action="">
        <label for=""></label>
        <input type="number" id="" name="" value="">
        <input type="submit" value="Modificar">
</form>