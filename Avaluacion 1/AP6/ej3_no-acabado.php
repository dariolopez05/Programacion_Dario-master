<!DOCTYPE html>
<html>
<head>
    <title>Media aritmetica</title>
</head>
<body>
    <h1>Media aritmetica</h1>
    
    <?php
    
    $arr1 = [""];
    $num = $_POST['num'];
    $contador = 0;
    $num1 = 1;
    $cero = 0;

    while ($num1 <= $num ) {
        
    }


    while ($num > $contador) {
        $arr1[$contador] = 1;
        echo "$arr1[$contador]", "<br>";
        $contador ++;  
    }

    ?>
    
    <form method="POST" action="">
        <label for="num">Dame 1 numero entero:</label><br>
        <input type="text" id="num" name="num" value=""> 
        
        <input type="submit" value="Calcula">
    </form>
</body>
</html>