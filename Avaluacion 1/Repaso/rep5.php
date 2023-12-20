<!DOCTYPE html>
<html>
<head>
    <title>Asociación de vinicultores</title>
</head>
<body>
    <h1>Asociación de vinicultores</h1>
    
    <?php
    
    $vocal = $_GET['vocal'];
    
    if ($vocal == "a" && $vocal = "e" && $vocal = "i" && $vocal = "o" && $vocal = "u") {
        echo "La letra introducida es vocal.";
    } else {
        echo "La letra no es vocal, sigue intentando.";
    }

    ?>
    <form>
        <label for="">Inserta una letra:</label>
        <input type="text" id="" name="vocal" value=""><br>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>