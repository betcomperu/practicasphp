<?php
/* Encapsulamiento, Getters y Setters*/

class Cliente
{
    public $nombre;
    public $edad;
    protected $distrito;
    protected $email;
    public $direccion;
    protected $cambiodistrito = 0;

    public function __construct($nombre,$edad, $distrito, $email, $direccion)
    {
        $this->nombre    = $nombre;
        $this->edad=$edad;
        $this->distrito  = $distrito;
        $this->email     = $email;
        $this->direccion = $direccion;
     
    }

    public function getEdad()
    {
        $date_birthday = explode("/", $this->birthday);
        $date_now      = date("Y");

        settype($date_now, "integer");
        settype($date_birthday[2], "integer");

        $edad = $date_now - $date_birthday[2];

        $edad='12/09/1971';
        exit ( $this->getEdad());
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setDistrito($distrito)
    {
        if ($this->cambiardistrito >= 2) {
            throw new Exception("Error Processing Request", 1);
        }
        $this->distrito = $distrito;
        $this->cambiardistrito++;
    }
    public function getDistrito()
    {
        return strtolower($this->distrito);
    }

    public function registro()
    {
        return "El cliente : " . "$this->nombre " . ": Llena formulario de registro cliente";
    }
    public function pedido()
    {
        echo "$this->nombre " . ": Realizó el pedido en la web";
    }
    public function confirmacion()
    {
        echo "El Cliente : " . "$this->nombre" . " ha realizado un pedido a: " . "$this->direccion" . " | " . "$this->distrito" . " - Con el Email : " . "$this->email";
    }

}

$cliente1 = new Cliente("Alberto Chavez.", '12/09/1971', "Surco","albet@gmail.com", "Calle Alameda 1222");

//Imprime las funciones hechas
/*
echo ($cliente1->registro());
echo "<br>";
echo "{$cliente1->nombre}";
echo "<br>";
$cliente1->pedido();
echo "<br>";
$cliente1->confirmacion();
echo "<br>";
exit  ($cliente1->getEmail());
echo "<br>";
echo  ($cliente1->getEmail());
 */
// Probamos los Gettes y Setters

$cliente1->confirmacion(); // Llamamos al metodo Confirmación
echo "<br>";
$cliente1->setDistrito('Lince'); // Asignamos a la propiedad el valor "San Juan"
echo "<br>";
$cliente1->setDistrito('Miraflores'); // Cambiamos el valor de la propiedad a "Lince"
echo "<br>";
exit($cliente1->getDistrito());
echo "<br>";

 //$persona = new Person('Manuel', 'Salazar', '11/02/1990');

    echo $cliente1->getEdad();
