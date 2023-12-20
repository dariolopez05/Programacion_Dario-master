<?php
class Persona{
    //PROPIEDADES
    private $nombre;
    private $apellidos;
    private $edad;

    //CONSTRUCTOR
    function __construct($name="", $surname="", $age=0) {
        $this->nombre = $name;
        $this->apellidos = $surname;
        $this->edad = $age;
    }

    //MÉTODOS
    public function setNombre($name){
        $this->nombre = $name;
    }
    public function setApellidos($surname){
        $this->apellidos = $surname;
    }
    public function setEdad($edad) {
        $this->edad = $edad;
    }
    public function getNombre(){
        return $this->nombre;
    }    
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getEdad(){
        return $this->edad;    
    }
}    
//PROGRAMA PRINCIPAL
$persona1 = new Persona();
$persona1->setNombre("Vicente");
$persona1->setApellidos("Monfort Salvador");
$persona1->setEdad("34");

echo "Cositas de persona 1 <br>";
echo "---------------------<br>";
echo $persona1->getNombre() . " " . $persona1->getApellidos() . "<br>";
echo $persona1->getEdad();
echo "<br> <br>";

$persona2 = new Persona("Ana", "Perez", 22);

echo "Cositas de persona 2 <br>";
echo "---------------------<br>";
echo $persona2->getNombre() . " " . $persona2->getApellidos() . "<br>";
echo $persona2->getEdad();

?>