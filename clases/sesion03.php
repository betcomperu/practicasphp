<?php 
/* HERENCIA Y ABSTRACCION*/

abstract class Unit
{
	protected $alive = true;
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
	public function move($direccion)
	{
		echo "<p>{$this->name} avanza hacia la $direccion</p>";
	}
	public function attack($opponent)
	{
		echo "<p>{$this->name} ataca a  $opponent</p>";
	}
}
class Soldier extends Unit
{
	public function attack($opponent)
	{
		echo "<p>{$this->name} parte al   $opponent</p>";
	}
}
class Archier extends Unit
{

}

// Creando los objetos 

$silence = new Soldier('Silence');
$silence->move('al norte');
$silence->attack('Ramm');

 ?>