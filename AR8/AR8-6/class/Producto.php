<?php

class Producto{
    protected $denominacion;
    protected $unidades;
    protected $precio;

    function __construct($denominacion, $unidades, $precio){
        $this->denominacion = $denominacion;
        $this->unidades = $unidades;
        $this->precio = $precio;
    }

    function mostrar(){
        return "Producto $this->denominacion, hay $this->unidades unidades y el precio es de $this->precio /kg. <br>";
    }

    function reponer(){
        if ($this->unidades < 1) {
            return "Fuera de stock.";
        }   else {
            return "En stock.";
        }
    }
}

?>