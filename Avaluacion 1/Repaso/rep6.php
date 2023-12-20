<!DOCTYPE html>
<html>
<head>
    <title>Asociación de vinicultores</title>
</head>
<body>
    <h1>Asociación de vinicultores</h1>
    
    <?php
    
    $contador = 0;
    $num = 0;
    
    while ($contador < 4) {
        $numero = $_POST["dato$contador"];
        if (is_numeric($numero)) {
            $num ++;
        }
        $contador ++;
    }

    echo "Has introducido $num numeros.";

    ?>
    <form method="POST">
        <?php
        
        $contador = 0;

        while ($contador < 4) {
            echo "<label>Introduce un dato:</label>";
            echo "<input type='text' name='dato$contador'><br>";
            $contador++;
        }

        ?>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>