<!DOCTYPE html>
<html>
<head>
    <title>Loteria</title>
</head>
<body>
    <h1>Loteria</h1>
    
    <?php
    
    $contador = 0;
    
    while ($contador < 6) {
        echo random_int(1,50), "<br>";
        $contador++;
    }

    ?>
    <form>
        
    </form>
</body>
</html>