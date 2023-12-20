<html>
<head>
    <title>ex1aRecu</title>
</head>
<body>
    <h1>Examen 1a Evaluación RECUPERACIÓN</h1>
</body>
</html>
    
<?php    
    
    $horas=generarArray(); //llamo a la función generarArray, me devuelve un array y me lo guardo en $horas
    $horasMejorado=mejorarArray($horas); //le paso un array, me deuelve otro sin 0s repetidos y me lo guardo en $horasMejorado
    dibujaArray($horasMejorado); //dibujo el array. Si no consigues hacer $horasMejorado, pásale por parámetro el array $horas
    echo "<br>";
    $semana=masHoras($horas); //me devuelve la semana que he estudiado más horas. Si no haces $horasMejorado hazlo con $horas
    
    //FUNCIONES

    function generarArray(): array{
       $arr = array();

       for ($i=0; $i < 50; $i++) { 
        $arr[$i] = rand(0,6);
       }
       
       return $arr;
    }
    
    function mejorarArray($arr) : array{
        for ($i=0; $i < count($arr); $i++) {
            $pos = $i++; 
            if ($arr[$i] == 0) {
                if ($arr[$pos] == 0) {
                    array_splice($arr, $pos, 1);
                }
            }
        }
        return $arr;
    }

    function dibujaArray($arr){
        for ($i=0; $i < count($arr); $i++) { 
            if ($arr[$i] == 0) {
                echo "<br>";
            } else {
                echo $arr[$i];
            }
        }
    }

    function masHoras($num){
        $mayor = 0;
        $suma = 0;
        for ($i=0; $i < count($num); $i++) {
            $suma = $num[$i] + $suma;
            if ($num[$i] == 0) {
                if ($suma > $mayor) {
                    $mayor = $suma;
                }
                $suma = 0;
            }
            
        }
    echo "La semana que mas has estudiado ha sido un total de $mayor horas.";
    }
?>