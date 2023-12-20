<!DOCTYPE html>
<html>
<head>
    <title>Media aritmetica</title>
</head>
<body>
    <h1>Media aritmetica</h1>
    
    <?php

    $suma = 0;
    $contador = 0;
    $num = [];

    while ($contador < 5) {
        $num[$contador] = $_POST["num$contador"];
        $contador++;
    }

    $contador = 0;
    $pares = 0;

    while ($contador < 5) {
        $suma += $num[$contador];
        if (($num[$contador] % 2) == 0) {
            $pares++;
        }
        $contador++;
    }
    $media = $suma / 5;
    echo $media, "<br>";
    echo "Hay $pares pares";

    ?>
    
    <form method="POST" action="">

        <?php
        
        $contador = 0;

        while ($contador < 5) {
            echo "<label for='num$contador'>Dame 1 numero entero:</label>";
            echo "<input type='number' id='num$contador' name='num$contador'><br>"; 
            $contador++;
        }

        ?>
        <input type="submit" value="Calcula">
    </form>
</body>
</html>