<?php include ('sesion01.php');


$juan = new Persona();

echo $juan->setNombre('Juan Carlos Alvarado');
echo $juan->getNombre();
echo $juan->setEdad('49');
echo "<br>";

 echo " años ".$juan->cumpleanos()."he cumplido";
echo "<br>";
 echo $juan->sacadni('49');

 echo "<br>";
 echo "------------------";
  echo "<br>";
$maria = new Persona();

echo $maria->setNombre('Maria Pinedo Galarza');
 echo $maria->getNombre();
 echo $maria->setEdad('17');
 echo "<br>";

 echo " años ".$maria->cumpleanos()."he cumplido";
echo "<br>";
echo $maria->sacadni('17');
echo "<br>";

echo $maria->getEdad();
/*
var_dump($juan);
exit;
*/
?>

