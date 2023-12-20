<?php

require_once "autoloader.php";

$alumno = new Estudiante("David", -3);
echo $alumno->getter();
?>