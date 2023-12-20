<?php

require_once "autoloader.php";

$tomate = new Producto("Cherry", 0, 5);
echo $tomate->mostrar();
echo $tomate->reponer();
?>