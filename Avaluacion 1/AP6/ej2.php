
    
<?php

    $contador = 0;
    
    while ($contador <= 5) {
        $arr1 = [rand(1,9), rand(1,9), rand(1,9), rand(1,9), rand(1,9)];
        $arr2 = [rand(1,9), rand(1,9), rand(1,9), rand(1,9), rand(1,9)];
        echo "El producto de la primera posicion es ", $arr1[$contador] * $arr2[$contador], "<br>";
        $contador ++;    
    }
    
?>
    