<?php

class Burger extends Hosteleria{
    protected bool $servicioDomicilio;
    function __construct($mesas, $camareros, $cocineros, $precioMenu, $servicioDomicilio){
        parent::__construct($mesas, $camareros, $cocineros, $precioMenu);
        $this->servicioDomicilio = $servicioDomicilio;
    }

    function servicioCliente(){
        if ($this->cocineros > ($this->mesas / 3)) {
            return "Servicio al cliente bueno. <br> <br>";
        } else {
            return "Servicio al cliente malo. <br> <br>";
        }
    }

    function getInfo(){
        $domi = "";
        if ($this->servicioDomicilio) {
            $domi = "tiene servicio a domicilio";
        } else {
            $domi = "no tiene servicio a domicilio";
        }
        return "Burger: " . $this->mesas . " mesas, " . $this->camareros . " camareros, " . $this->cocineros . " cocineros, " . $this->precioMenu . "€/Menu, " . $domi . ".<br>";
    }
}

?>