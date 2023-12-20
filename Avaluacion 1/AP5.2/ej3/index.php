<!DOCTYPE html>
<html>
<head>
    <title>Suma de impares</title>
</head>
<body>
    <h1>Suma de impares</h1>

    <?php
    
    $num1 = 0;
    $num2 = 0;
    $suma = 0;
    $cont = 0;

    if ($num1 % 2 == 0) {
        $num1++;
    }
    
    if ($num2 % 2 == 0) {
        $num2--;
    }

    $cont = $num1;

    while ($cont <= $num2) {
        $suma += $cont;
        $cont += 2;
    }

    echo "<p>La suma de los impares comprendidos es: $suma</p>";
   
    ?>
   
    <form method="POST" action="">
        <label for="num1">Introduce el primer numero:</label>
        <input type="text" id="" name="num1" value=""><br>
        <label for="num2">Introduce el segundo numero:</label>
        <input type="text" id="" name="num2" value=""><br>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>