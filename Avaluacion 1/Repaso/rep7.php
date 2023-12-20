<!DOCTYPE html>
<html>
<head>
    <title>Asociación de vinicultores</title>
</head>
<body>
    <h1>Asociación de vinicultores</h1>
    
    <?php
    
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $suma = 0;

    if (($num1 % 2) == 0) {
        $num1 ++;
        while ($num1 < $num2) {
            $numx = $num1;
            $num1 + 2;
            $suma = $num1 + $numx;
        }
    } elseif (($num2 % 2) == 0) {
            $num2 --;
            while ($num1 < $num2) {
                $numx = $num1;
                $num1 + 2;
                $suma = $num1 + $numx;
            }
        } 
    echo "$suma";
    
    ?>
    <form>
        <label for="">Inserta el primer numero:</label>
        <input type="text" id="" name="num1" value=""><br>
        <label for="">Inserta el segundo numero:</label>
        <input type="text" id="" name="num2" value=""><br>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>