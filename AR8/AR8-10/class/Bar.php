<?php
class Bar extends Hosteleria{
    protected int $metrosBarra;
    function __construct($mesas, $camareros, $cocineros, $precioMenu, $metrosBarra){
        parent:: __construct($mesas, $camareros, $cocineros, $precioMenu);
        $this->metrosBarra = $metrosBarra;
    }

    function servicioCliente(){
        if ($this->camareros > $this->mesas) {
            return "Servicio al cliente bueno. <br> <br>";
        } else {
            return "Servicio al cliente malo. <br> <br>";
        }
    }

    function getInfo(){
        return "Bar: " . $this->mesas . " mesas, " . $this->camareros . " camareros, " . $this->cocineros . " cocineros, " . $this->precioMenu . "€/Menu, " . $this->metrosBarra . " metros de barra. <br>";
    }

}
    ?>