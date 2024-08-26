<?php 
include  '01.php';


class Vecino extends Persona {
    public $direccion;

    public function __construct($nombre, $edad, $email, $telefono,$direccion, $nacionalidad) // Te jala todas las variables que tu quieras que jale
     {
        parent::__construct($nombre, $edad, $email, $telefono, $nacionalidad);// Te jala las variables del padre
        $this->direccion = $direccion; // Te suma la variable de la clase actual
    }
}

$vecino = new Vecino("Juan", 50, "juan@gmail.com", 123456789, "Calle 123", "Bogota");

// Imprimir los valores del objeto vecino
echo "Registro Nro:" . $vecino->getContador()."<br>";
echo "Nombre: " . $vecino->getNombre() . "<br>";
echo "Edad: " . $vecino->getEdad() . "<br>";
echo "Email: " . $vecino->getEmail() . "<br>";
echo "Teléfono: " . $vecino->getTelefono() . "<br>";
echo "Dirección: " . $vecino->direccion. "<br>";
echo "Pais: " . $vecino->getNacionalidad() . "<br>";
echo "<br>";

$vecino2 = new Vecino("Maria", 40, "maria@gmail.com", 3456789, "Calle 23423", "Bogota");

// Imprimir los valores del objeto vecino
echo "Registro Nro:" . $vecino->getContador()."<br>";
echo "Nombre: " . $vecino2->getNombre() . "<br>";
$vecino2->setEdad(52);
echo "Edad: " . $vecino2->getEdad() . "<br>";
echo "Email: " . $vecino2->getEmail() . "<br>";
echo "Teléfono: " . $vecino2->getTelefono() . "<br>";
echo "Dirección: " . $vecino2->direccion . "<br>";
echo "Pais: " . $vecino2->getNacionalidad() . "<br>";

echo "<br>";

echo $vecino2->datos();