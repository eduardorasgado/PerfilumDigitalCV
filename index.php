<?php
/**
 * Created by PhpStorm.
 * User: cheetos
 * Date: 24/12/18
 * Time: 11:12 PM
 */

// this is a comment
echo "this is my project";
echo "<br>";

// arreglos con indice string
$miArreglo = [
    "caso1" => "jaguar",
    "caso2" => "leon",
    "caso3" => "leopardo"
];

echo $miArreglo["caso2"];
echo "<br>";

// clases
class Animal
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    function move()
    {
        echo "$this->name se mueve";
    }
}

$miAnimal = new Animal("Amelio");
$miAnimal->move();
echo "<br>";

// callables
$miFuncion = function(array $objetos){
    return $objetos[0];
};

$cocina = [
    "cuchara",
    "tenedor",
    "mesa"
];

$elementodeCocina = $miFuncion($cocina);
echo $elementodeCocina;