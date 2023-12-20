<!DOCTYPE html>
<html>
<head>
    <title>Tarifas</title>
</head>
<body>
    <h1>Tarifas</h1>
    
    <?php
    
    $personas = $_GET['personas'];

    if (($personas > 200) && ($personas <= 300)) {
        echo "Precio de 85€ por persona.";
    } elseif ($personas > 300) {
        echo "Precio de 75€ por persona.";
    } else {
        echo "Precio de 95€ por persona.";
    }

    ?>
    <form>
        <label for="">Numero de personas:</label>
        <input type="number" id="" name="personas" value=""> <br>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>