<?php
require_once "autoloader.php";

$barAlcasser23 = new Bar(5, 7, 3, 12, 8);
echo $barAlcasser23->getInfo();
echo $barAlcasser23->servicioCliente(); 

$tonyPizza = new Restaurante(2, 3, 6, 5, 1);
echo $tonyPizza->getInfo();
echo $tonyPizza->servicioCliente();

$kebabCanals = new Burger(3, 4, 2, 7, true);
echo $kebabCanals->getInfo();
echo $kebabCanals->servicioCliente();


?>