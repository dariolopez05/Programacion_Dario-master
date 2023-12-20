<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    
    <?php
        
        $paquetes = $_POST['paquetes'];
        $tamano = $_POST['tamano'];
        $peso = $_POST['peso'];
        $zona = $_POST['zona'];
        $maritimo= $_POST['maritimo'];
        $precio = 0;

        if ($tamano < 0.5) {
            $precio = $tamano * 50;
        } elseif ($tamano < 1) {
            $precio = $tamano * 75;
        } elseif ($tamano >= 1) {
            $precio = $tamano * 100;
        } 

        if ($peso < 5) {
            $precio;
        } elseif ($peso < 10) {
            $precio = $precio + ($precio * 25 / 100);
        } elseif ($peso < 15) {
            $precio = $precio + ($precio * 50 / 100);
        } else {
            echo "El peso es demasiado alto, no se puede realizar el envio.";
        }

        if ($zona == "Canarias") {
            $precio = $precio + ($precio * 10 / 100);
        } elseif ($zona == "Peninsula") {
            $precio;
        } elseif ($zona == "Baleares") {
            if ($maritimo == "si") {
                $precio;
            } else {
                $precio = $precio + ($precio * 10 /100);
            }
        }
        $total = $precio * $paquetes;
        echo "El precio del envio es de $total €."
        
    ?>
    
    <form method="POST" action="">
        <label for="kilos">PAQUETES:</label>
        <input type="number" id="paquetes" name="paquetes" value="">
        <label for="tamano">TAMAÑO:</label>
        <input type="number" id="tamano" name="tamano" value="">
        <label for="peso">PESO:</label>
        <input type="number" step="any" id="peso" name="peso" value="">
        <label for="zona">ZONA:</label>
        <input type="text" id="zona" name="zona" value=""><br>
        <label for="maritimo">En caso de ser de Baleares marcar si va a ser envio por mar:</label>
        <input type="text" id="maritimo" name="maritimo" value=""><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>