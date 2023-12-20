<!DOCTYPE html>
<html>
<head>
    <title>Asociación de vinicultores</title>
</head>
<body>
    <h1>Asociación de vinicultores</h1>
    
    <?php
    
    $tiempo = $_GET['tiempo'];
    $domingo = $_GET['domingo'];
    $hora = $_GET['hora'];
    $precio = "";
    $total = "";

    if ($tiempo < 5) {
        $precio = ($tiempo * 1);
    } elseif ($tiempo < 8) {
        $precio = ((($tiempo - 5) * 0.8) + 5);
    } elseif ($tiempo < 10) {
        $precio = ((($tiempo - 8) * 0.7) + 5 + 3*0.8);
    } elseif ($tiempo >= 10) {
        $precio = ((($tiempo - 10) * 0.5) + 5 + (3*0.8)+(2*0.7));
    }
    

    if ($domingo = "si") {
        $total = $precio + (($precio * 3) / 100);
        echo "El total de la llamada de $tiempo min, por ser domingo sera de $total €."; 
    } elseif ($domingo = "no") {
        if ($hora = "mañana") {
            $total = $precio + (($precio * 15) / 100);
            echo "El total de la llamada de $tiempo min, por ser por la mañana sera de $total €.";
        } elseif ($hora = "tarde") {
            $total = $precio + (($precio * 10) / 100);
            echo "El total de la llamada de $tiempo min, por ser por la tarde sera de $total €.";
        }
    }

    ?>
    <form>
        <label for="">Tiempo:</label>
        <input type="text" id="" name="tiempo" value=""> <br>
        <label for="">Es domingo?</label>
        <input type="text" id="" name="domingo" value=""> <br>
        <label for="">Es mañana o tarde?</label>
        <input type="text" id="" name="hora" value=""> <br>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>