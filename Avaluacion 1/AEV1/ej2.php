<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    
    <?php
        
        $num = $_POST['num'];

        if ($num > 0){
                while ($num != 1) {
                    if (($num % 2) == 0 ) {
                        $num = $num / 2;
                    } elseif (($num % 2) !== 0 ) {
                        $num = ($num * 3) + 1;
                    }
                    echo $num, "<br>"; 
                }
        } else {
            echo "Tienes que introducir un numero entero y positivo.";
        }

        
        
    ?>
    
    <form method="POST" action="">
        <label for="num">NÚMERO:</label>
        <input type="number" id="num" name="num" value="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>