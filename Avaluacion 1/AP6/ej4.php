<!DOCTYPE html>
<html>
<head>
    <title>DNI</title>
</head>
<body>
    <h1>DNI</h1>
    
    <?php
    
    $dni = $_POST['dni'];
    $arr = [ "T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E" ];

    $letra = $dni % 23;
    echo "$arr[$letra]";

    ?>
    
    <form method="POST" action="">
        <label for="dni">Inserta tu DNI:</label><br>
        <input type="text" id="dni" name="dni" value=""> 
        
        <input type="submit" value="Calcula">
    </form>
</body>
</html>