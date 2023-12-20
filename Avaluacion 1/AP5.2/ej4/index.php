<!DOCTYPE html>
<html>
<head>
    <title>Loteria</title>
</head>
<body>
    <h1>Loteria</h1>
    
    <?php
    
        $num1 = random_int(1,49);
        $num2 = random_int(1,49);
        $num3 = random_int(1,49);
        $num4 = random_int(1,49);
        $num5 = random_int(1,49);
        $num6 = random_int(1,49);


        echo "Primer numero: $num1 <br>" ;
        echo "Segundo numero: $num2 <br>";
        echo "Tercer numero: $num3 <br>";
        echo "Cuarto numero: $num4 <br>";
        echo "Quinto numero: $num5 <br>";
        echo "Sexto numero: $num6 <br>";

    ?>
    <form>
        <input type="submit" value="Sorteo">
    </form>
</body>
</html>