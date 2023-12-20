<?php

abstract class Hosteleria{
    protected int $mesas;
    protected int $camareros;
    protected int $cocineros;
    protected int $precioMenu;

    function __construct($mesas, $camareros, $cocineros, $precioMenu){
        $this->mesas = $mesas;
        $this->camareros = $camareros;
        $this->cocineros = $cocineros;
        $this->precioMenu = $precioMenu;
    }
}

?>