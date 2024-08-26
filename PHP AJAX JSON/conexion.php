<?php
	$host = 'localhost';
	$user = 'root';
	$password = 'mysql';
	$db = 'agencia';

	$conection = @mysqli_connect($host,$user,$password,$db);
	if(!$conection){
		echo "Error en la conexión";
	}

?>