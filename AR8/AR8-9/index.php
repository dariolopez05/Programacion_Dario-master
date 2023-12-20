<?php

require_once "autoloader.php";

$del = new Delantero("Leo Messi", 10, 50);
echo $del->getDatos() . "<br>";

$por = new Portero("Iker Casillas", 1, 35);
echo $por->getDatos() . "<br>";
?>