<form method="POST" action="">
    <label for="lit">Litros a retirar:</label>
    <input type="number" id="lit" name="lit" value="">
    <input type="submit" value="Vaciar">
</form>
<?php

require_once "autoloader.php";

$depositoMunicipal = new Deposito("Agua", 10000);
echo $depositoMunicipal->mostrar() . "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lit = $_POST['lit'];}
    echo "Litros despues de la retirada: <br>";
    echo $depositoMunicipal->retirar($lit);

?>
