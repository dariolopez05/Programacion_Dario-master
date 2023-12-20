<?php

class Promedio{
    //PROPIEDADES
    public $a;
    public $b;
    public $c;

    //MÉTODOS
    public function setA($a){
        $this->A = $a;
    }
    public function setB($b){
        $this->B = $b;
    }
    public function setC($c) {
        $this->C = $c;
    }
    public function getA(){
        return $this->A;
    }    
    public function getB(){
        return $this->B;
    }
    public function getC(){
        return $this->C;    
    }
    public function average(){
        $media = ($this->A + $this->B + $this->C)/3;
        echo "La media es de " . $media . ". <br>";
    }
}

//PROGRAMA PRINCIPAL
$media1 = new Promedio();
$media1->setA("10");
$media1->setB("10");
$media1->setC("10");
$media1->average();

?>