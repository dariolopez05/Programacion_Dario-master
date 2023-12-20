<!DOCTYPE html>
<html>
<head>
    <title>Adivina el numero</title>
</head>
<body>
    <h1>Adivina el numero</h1>
    
    <?php
    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 > $numero2) {
        echo "$numero1 es mayor";
    } elseif ($numero1 < $numero2) {
        echo "$numero2 es mayor";
    } elseif ($numero1 = $numero2) {
        echo "Los numeros son iguales";
    } else {
        echo "Datos mal introducidos";
    }
       
    ?>
    <form>
        <label for="">Dame el primer numero:</label>
        <input type="number" id="" name="numero1" value=""> <br>
        <label for="">Dame el segundo numero:</label>
        <input type="number" id="" name="numero2" value=""> <br>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>