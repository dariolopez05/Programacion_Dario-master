<?php
class Restaurante extends Hosteleria{
    protected int $estrellasMichelin;
    function __construct($mesas, $camareros, $cocineros, $precioMenu, $estrellasMichelin){
        parent::__construct($mesas, $camareros, $cocineros, $precioMenu);
        $this->estrellasMichelin = $estrellasMichelin;
    }

    function servicioCliente(){
        if ($this->camareros > $this->mesas) {
            return "Servicio al cliente bueno. <br> <br>";
        } else {
            return "Servicio al cliente malo. <br> <br>";
        }
    }

    function getInfo(){
        return "Restaurante: " . $this->mesas . " mesas, " . $this->camareros . " camareros, " . $this->cocineros . " cocineros, " . $this->precioMenu . "€/Menu, " . $this->estrellasMichelin . " estrellas michelin. <br>";
    }

}
?>