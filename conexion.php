<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dsn = 'mysql:dbname=tiendapoemas;host=localhost';
$user = 'root';
$password = 'mysql';

try{

	$pdo = new PDO(	$dsn, 
					$user, 
					$password
					);
    echo "Conexion correcta";

}catch( PDOException $e ){
	echo 'Error al conectarnos: ' . $e->getMessage();
}


?>