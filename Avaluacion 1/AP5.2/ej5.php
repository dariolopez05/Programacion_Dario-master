<!DOCTYPE html>
<html>
<head>
    <title>Adivina el numero</title>
</head>
<body>
    <h1>Adivina el numero</h1>
    
    <?php
    
       $random = random_int(1,100);
       $num = "";
       $total = 0;
       
       if ($num < $random) {
            echo "El numero que tienes que adivinar es mayor que $num";
            $total++;
       } elseif ($num > $random) {
            echo "El numero que tienes que adivinar es mayor que $num";
            $total++;
       } elseif ($num == $random) {
            echo "Has adivinado el numero!!!";
            echo "Has hecho un total de $total intentos";
       }

    ?>
    <form>
        <label for="num">Adivina el numero:</label>
        <input type="number" id="num" name="num" value=""> <br>
        <input type="submit" value="Comprabar">
    </form>
</body>
</html>