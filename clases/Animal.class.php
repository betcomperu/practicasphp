<?php 
/**
* 
*/
class Animal
{
	private $color = "gris";
	private $peso = 10;

	// Accesos
	public function getColor()
	{
		return $this->$color;  // Devuelve el color
	}
	public function setColor($color)
	{
		$this->color =$color; //Escribir en el atributo color
	}
	public function getPeso()
	{
		return $this->peso; //devuelve el peso
	}
	public function setPeso($peso)
	{
		$this->peso = $peso;
	}

	// Métodos

	public function comer()
	{

	}
	public function mover()
	{

	}
	public function akilo()
	{

		$this->peso = $this->peso + 1;
	}

}

 ?>