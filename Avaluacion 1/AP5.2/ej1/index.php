<!DOCTYPE html>
<html>
<head>
    <title>Detector de vocales</title>
</head>
<body>
    <h1>Detector de vocales</h1>

    <?php
    
    $letra = '';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $letra = $_POST['letra'];

        if ($letra == 'a' || $letra == 'a' || $letra == 'a' || $letra == 'a' || $letra == 'a' ){
            echo "$letra es vocal";
        } else {
            echo "$letra es consonante";
        }
        
    }
    ?>
   
    <form method="POST" action="">
        <label for="letra">Introduce una letra:</label>
        <input type="text" id="guess" name="letra" value="">
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>