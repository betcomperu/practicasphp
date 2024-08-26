<?php 
include ('modelos/UsuarioModel.php');
include ('vistas/usuarios.php');
class Usuarios{
	function mostrarVista()
	{
		//Logica del Negocio
		$usuario = new UsuarioModel();
		$datos = $usuario->data();
		//Mostrar La vista
		$vista = new Vista();
		$vista->renderizar($datos);
				
	}
}
?>