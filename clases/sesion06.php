<?php 
/* Hola este es una practica de POO*/

class Persona {
    public $name;
    public $edad;
    private $dni;
    protected $sueldo;
    
    function getName() {
        return $name;
    }
}

class Usuario extends Persona{
    
    function setName($name) {
        parent::name= $name;
    }
}

$obj1 = new Persona;
echo $obj1->getName('Luis');

$obj2 = new Usuario;
echo $obj2->setName('Jose');

?>