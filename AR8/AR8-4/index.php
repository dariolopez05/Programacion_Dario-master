<form method="POST" action="">
    <label for="dia">Diametro de la esfera:</label>
    <input type="number" id="dia" name="dia" value="">
    <input type="submit" value="Vaciar">
</form>
<?php

require_once "autoloader.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $diametro = $_POST['dia'];

    $bola = new Esfera($diametro);
    echo $bola->volumen();
}
?>