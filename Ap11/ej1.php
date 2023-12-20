<?php
class Triangulo{
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
    public function area(){
        $area = ($this->A + $this->B + $this->C)/2;
        echo "El area es de " . $area . ". <br>";
    }
}

//PROGRAMA PRINCIPAL
$triangulo1 = new Triangulo();
$triangulo1->setA("23");
$triangulo1->setB("14");
$triangulo1->setC("87");
$triangulo1->area();


?>