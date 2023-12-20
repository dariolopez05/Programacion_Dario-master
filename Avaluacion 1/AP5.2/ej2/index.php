<!DOCTYPE html>
<html>
<head>
    <title>Contador de numeros</title>
</head>
<body>
    <h1>Contador de numeros</h1>
    
    <?php
    $num = 0;
    $contador = 0;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        while ($contador < 4) {
            $dato = $_POST["dato$contador"];
            $contador++;
            if (is_numeric($dato)){
                 $num++;
            }
        }
        echo "<p>Has introducido $num numeros</p>";
    }
    ?>
    
    <form method="POST" action="">
        <?php
        $contador = 0;
        while ($contador < 4) {
            echo "<label for='dato$contador'>Dato $contador:</label>";
            echo "<input type='text' id='dato$contador' name='dato$contador' required><br>";
            $contador++;
        }
        ?>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>