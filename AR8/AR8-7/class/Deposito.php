<?php

class Deposito{
    protected $liquido;
    protected $litros;

    function __construct($liquido, $litros){
        $this->liquido = $liquido;
        $this->litros = $litros;
    }

    function mostrar(){
        return "El deposito esta lleno con $this->litros L de $this->liquido. <br>"; 
    }

    function retirar($lit){
        if ($lit == 0) {
            return "No se retira nada";
        } else {
            return ($this->litros - $lit);
        }
        
    }
}

?>