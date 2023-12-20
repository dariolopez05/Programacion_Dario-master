<form method="POST" action="">
        <label for="rows">Filas:</label>
        <input type="number" id="rows" name="rows" value=""><br>
        <label for="columns">Columnas:</label>
        <input type="number" id="columns" name="columns" value=""><br>
        <label for="rows2">Filas 2:</label>
        <input type="number" id="rows2" name="rows2" value=""><br>
        <label for="columns2">Columnas 2:</label>
        <input type="number" id="columns2" name="columns2" value=""><br>
        <input type="submit" value="Dibujar">
</form>
<?php

class Matrix{
    //PROPIEDADES
    private $rows;
    private $columns;
    private $matrix;
    public function __construct(int $rows, int $columns){
        $this->rows = $rows;
        $this->columns = $columns;
        $this->setMatrix();
    }
    private function setMatrix(){
        $matrix=[];
        for ($i=0; $i < $this->rows; $i++) { 
            for ($j=0; $j < $this->columns; $j++) { 
                $matrix[$i][$j] = rand(1,9);
            }
        }
        $this->matrix = $matrix;
    }
   
    public function getRows(): int{
        return $this->rows;
    }
    public function getColumns(): int{
        return $this->columns;
    }
    public function setPosValue(int $row, int $col, int $value): void{
       
    }
    public function getPosValue(int $row, int $col): ?int{
       
    }
    public function drawTable()
    {
        $output = "<table border='1'>";
        for ($i=0; $i < $this->rows; $i++) {
            $output .= "<tr>";
            for ($j=0; $j < $this->columns; $j++) { 
                $output .= "<td>" . $this->matrix[$i][$j] . "</td>";
            }
            $output .= "</tr>";
        }
        $output .= "</table>";
        return $output;
    }
}

class Operaciones{
    private Matrix $tabla;
    private Matrix $tabla2;
    private $fila;
    private $columna;

    function __construct($t1, $t2, $row, $columns){
        $this->tabla = $t1;
        $this->tabla2 = $t2;
        $this->fila = $row;
        $this->columna = $columns;
    }

    /*public function suma(): Matrix{
        $suma = "<table border='1'>";
        for ($i=0; $i < $this->fila; $i++) {
            $suma .= "<tr>";
            for ($j=0; $j < $this->columna; $j++) {    
                $oper = ($this->tabla[$i][$j]) + ($this->tabla2[$i][$j]);
                $suma .= "<td>" . $oper . "</td>";
            }
            $suma .= "</tr>";
        }
        $suma .= "</table>";
        return $suma;
    }*/
    public function suma(): Matrix{
        $oper = new Matrix($this->fila, $this->columna);
        for ($i=0; $i < $this->fila; $i++) {
            for ($j=0; $j < $this->columna; $j++) {    
                $oper[$i][$j] = ($this->tabla[$i][$j]) + ($this->tabla2[$i][$j]);
            }
        }
        return $oper;
    }

}

$filas = $_POST['rows'];
$columnas = $_POST['columns'];
$tabla = new Matrix($filas, $columnas);
$mostrar = $tabla->drawTable();
echo "Tabla 1: <br>" . $mostrar . "<br>";

$filas2 = $_POST['rows2'];
$columnas2 = $_POST['columns2'];
$tabla2 = new Matrix($filas2, $columnas2);
$mostrar2 = $tabla2->drawTable();
echo "Tabla 2: <br>" . $mostrar2 . "<br>";

$op = new Operaciones($tabla, $tabla2, $filas, $columnas);
$suma = $op->suma();
echo $suma;

?>