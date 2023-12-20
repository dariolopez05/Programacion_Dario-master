<?php
    session_start();
?>
<html>
<head>
    <title>ex1aEval</title>
</head>
<body>
    <h1>Examen 1a Evaluación</h1>
    <!--formulario para recoger las filas y columnas de inicio y fin-->
</body>
<form method="POST" action="">
        <label for="fi">Fila inicio:</label>
        <input type="number" id="fi" name="fi" value=""><br>
        <label for="ci">Columna inicio::</label>
        <input type="number" id="ci" name="ci" value=""><br>
        <label for="ff">Fila fin:</label>
        <input type="number"" id="ff" name="ff" value=""><br>
        <label for="cf">Columna fin:</label>
        <input type="text" id="cf" name="cf" value=""><br>
        <input type="submit" value="Calcular">
    </form>

</html>
    
<?php
    $numeros = [1,2,3,4,5,6];
    $colores = ['RED','YEL','GRE','BLU','BLA','WHI'];
    
    /*usa esto si no los generas tú*/
    $combinaciones=[[1,'RED'],[1,'YEL'],[1,'GRE'],[1,'BLU'],[1,'BLA'],[1,'WHI'],[2,'RED'],[2,'YEL'],[2,'GRE'],[2,'BLU'],[2,'BLA'],[2,'WHI'],[3,'RED'],[3,'YEL'],[3,'GRE'],[3,'BLU'],[3,'BLA'],[3,'WHI'],[4,'RED'],[4,'YEL'],[4,'GRE'],[4,'BLU'],[4,'BLA'],[4,'WHI'],[5,'RED'],[5,'YEL'],[5,'GRE'],[5,'BLU'],[5,'BLA'],[5,'WHI'],[6,'RED'],[6,'YEL'],[6,'GRE'],[6,'BLU'],[6,'BLA'],[6,'WHI']];
    
    $tablero = [[17,8,33,0,26,28],[16,9,1,18,3,34],[19,21,2,10,27,32],[20,35,4,30,11,31],[22,7,6,13,25,12],[23,24,15,14,29,5]];
    
    $nums = [];
    $tablero = generarTablero($nums);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fini = $_POST['fi'];
        $cini = $_POST['ci'];
        $ffin = $_POST['ff'];
        $cfin = $_POST['cf'];
       //comprueba si la tirada es permitida
       if ($fini == $ffin) {
            echo "Tirada permitida <br>";
        } elseif ($cini == $cfin) {
        echo "Tirada permitida <br>";
        } else {
            echo "Tirada no permitida <br>"; 
        }
           /* if (tiradaValida($_SESSION['tablero'], $combinaciones, $fini, $cini, $ffin, $cfin)){
            echo "Tirada válida <br>";
        }else{
            echo "Tirada NO válida <br>";
        }*/
        }
    
       //si es permitida, comprueba si es válida
  /* }*/
    
   
    if (!isset($_SESSION['tablero'])) {
        $_SESSION['tablero'] = $tablero;
        if (tiradaValida($_SESSION['tablero'], $combinaciones, $fini, $cini, $ffin, $cfin)){
            echo "Tirada válida <br>";
        }else{
            echo "Tirada NO válida <br>";
        }
    } 
    
    //posibles combinaciones mezclando los dos arrays
    
    //$combinaciones=generarCombinaciones($numeros,$colores);
    //$tabla = dibujarTablero($_SESSION['tablero'], $combinaciones);
    $tabla = dibujarTablero($tablero, $combinaciones);
    var_dump($tabla);
    
    
    
    
    
    
    //FUNCIONES

    //desarrolla esta función si no usas la estructura dada $combinaciones
    /* */function generarCombinaciones($array1,$array2){ 
        $contador = 0;
        $compr = [];
        for ($i=0; $i < 6; $i++) { 
            for ($j=0; $j < 6; $j++) { 
                $compr[$i][$j][0] = $array1[$j];
                $compr[$i][$j][1] = $array2[$j];
            }
        }
        return $compr;
    }
    
    function dibujarTablero($arrayTablero, $arrayCombinaciones){
     $arr = [];
        /*for ($i=0; $i < 36; $i++) {
            for ($j=0; $j < ; $j++) {
                $combinacion = $tablero[$i][$j];
            }
            
        }*/
        for ($i=0; $i < 6; $i++) { 
            for ($j=0; $j < 6; $j++) { 
                $num=$arrayTablero[$i][$j];
                echo $arrayCombinaciones[$num][0], "-";
                echo $arrayCombinaciones[$num][1], " ";
            }
           echo "<br>";
        }
    }
   
    /**/function tiradaValida($arrayTablero, $arrayCombinaciones, $filaOrigen,$columnaOrigen, $filaDestino, $columnaDestino): bool{
        if ($arrayTablero[$arrayCombinaciones[$filaOrigen][$columnaOrigen][0]] == $arrayTablero[$arrayCombinaciones[$filaDestino][$columnaDestino][0]]) {
            return true;
        } elseif ($arrayTablero[$arrayCombinaciones[$filaOrigen][$columnaOrigen][1]] == $arrayTablero[$arrayCombinaciones[$filaDestino][$columnaDestino][1]]) {
            return true;
        }else {
            return false;
        }
        
        
    }

    //desarrolla esta función si no usas la estructura dada $tablero
    
    function generarTablero($n): array{
        $tabla = [];
        for ($i=0; $i < 36; $i++) { 
            array_push($n, $i);
        }
        for ($i=0; $i < 6; $i++) { 
            for ($j=0; $j < 6; $j++) { 
                $pos=rand(0, count($n) - 1);
                $rand = $n[$pos];
                $tabla[$i][$j] = $rand;
                array_splice($n, $pos, 1);
            }
        }
        return $tabla;
    }

    /*function generarTablero($n): array{
        $tabla = [];
        for ($i=0; $i < 36; $i++) { 
            array_push($n, $i);
        }
        $a=0;
        while ($a < 6) {
            $j=0;
            while ($j < 6) {
                $pos=rand(0, count($n));
                $rand = $n[$pos];
                $tabla[$a][$j] = $rand;
                array_splice($n, $pos, 1);
                $j++;
            }
            $a++;
        }
        return $tabla;
    } */
?>