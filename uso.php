<?php 

include ('/clases/Animal.class.php');

$perro = new Animal();

// Leer Peso : 

echo "El peso del Perro es : ". $perro->getPeso(). " Kg <br/>";

// Añadir  1 kg. 

$perro->akilo();

echo "El peso del perro es : " . $perro->getPeso().  " Kg <br/>";

 ?>
 