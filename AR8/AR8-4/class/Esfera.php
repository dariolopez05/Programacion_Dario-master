<?php

class Esfera{
    protected $diametro;
    
    function __construct($diametro){
        $this->diametro = $diametro;
    }

    function volumen(){
        $radio = ($this->diametro / 2);
        $volumen = (4/3)*3.1416*(pow($radio, 3));
        return "El volumen de la esfera con diametro $this->diametro, es de $volumen.";
    }
}

?>