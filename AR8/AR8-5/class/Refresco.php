<?php

class Refresco{
    protected $sabor;
    protected $nivelAzucar;
    protected $capEnvase;

    function __construct($sabor, $nivelAzucar, $capEnvase){
        $this->sabor = $sabor;
        $this->nivelAzucar = $nivelAzucar;
        $this->capEnvase = $capEnvase;
    }

    function mostrar(){
        return "Sabor $this->sabor, nivel $this->nivelAzucar azucar y capacidad de $this->capEnvase litros.";
    }
}

?>