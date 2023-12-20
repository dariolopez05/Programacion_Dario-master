<form method="POST" action="">
        <label for="n1r">Numero 1:</label>
        <input type="number" id="n1r" name="n1r" value="">
        <label for="n1i">i</label>
        <input type="number" id="n1i" name="n1i" value=""><br>
        <label for="n2r">Numero 2:</label>
        <input type="number" id="n2r" name="n2r" value="">
        <label for="n2i">i</label>
        <input type="number" id="n2i" name="n2i" value=""><br>
        <input type="submit" value="Calcular">
    </form>
<?php

class NumerosComplejos {
    //PROPIEDADES
    private float $n1r;
    private float $n1i;
    private float $n2r;
    private float $n2i;

    //CONSTRUCTOR
    function __construct($n1r, $n1i, $n2r, $n2i) {
        $this->n1r = $n1r;
        $this->n1i = $n1i;  
        $this->n2r = $n2r; 
        $this->n2i = $n2i; 
    }

    public function mult(){
        $real = ($this->n1r * $this->n2r) - ($this->n1i * $this->n2i);
        $imag = ($this->n1r * $this->n2r) + ($this->n1i * $this->n2i);
        $nums = [$real, $imag];
        return $nums;
    }
    public function sum(){
        $real = ($this->n1r + $this->n2r);
        $imag = ($this->n1i + $this->n2i);
        $nums = [$real, $imag];
        return $nums;
    }
    public function rest(){
        $real = ($this->n1r - $this->n2r);
        $imag = ($this->n1i - $this->n2i);
        $nums = [$real, $imag];
        return $nums;
    }

    //MÉTODOS
    
}

$n1r = $_POST['n1r'];
$n1i = $_POST['n1i'];
$n2r = $_POST['n2r'];
$n2i = $_POST['n2i'];

//PROGRAMA PRINCIPAL
$op = new NumerosComplejos($n1r, $n1i, $n2r, $n2i);
$operacionM = $op->mult();
echo "La multiplicacion da $operacionM[0] $operacionM[1]i <br>";
$operacionS = $op->sum();
echo "La suma da $operacionS[0] $operacionS[1]i <br>";
$operacionR = $op->rest();
echo "La resta da $operacionR[0] $operacionR[1]i <br>";

?>

