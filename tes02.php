<?php 

date_default_timezone_set('UTC');
class Saludos{  // Clase Saludo
   

    function saluda(){ // Funcion Saluda
       $hoy = getdate();
print_r($hoy);
    }

    function despidete(){
        echo "Bueno me voy, hasta luego";
    }
}


$saludos = new Saludos();
$ingresando=$saludos->saluda();
echo "<br>";
$saliendo=$saludos->despidete();
echo "<br>";




?>