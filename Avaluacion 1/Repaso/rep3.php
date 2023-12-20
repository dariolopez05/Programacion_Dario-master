<!DOCTYPE html>
<html>
<head>
    <title>Asociación de vinicultores</title>
</head>
<body>
    <h1>Asociación de vinicultores</h1>
    
    <?php
    
    $tipo = $_GET['tipo'];
    $tamaño = $_GET['tamaño'];

    if ($tipo == "A") {
        if ($tamaño == "1") {
            echo "+0,20€";
        } elseif ($tamaño == "2") {
            echo "+0,30€";
        }
    } elseif ($tipo == "B") {
        if ($tamaño == "1") {
            echo "-0,30€";
        } elseif ($tamaño == "2") {
            echo "-0,50€";
        }
    }

    ?>
    <form>
        <label for="">Tipo:</label>
        <input type="text" id="" name="tipo" value=""> <br>
        <label for="">Tamaño:</label>
        <input type="number" id="" name="tamaño" value=""> <br>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>