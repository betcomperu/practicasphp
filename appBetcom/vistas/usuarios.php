<?php 
include 'vistas/layers/header.php';
?>
<?php
include_once './controladores/usuarios.php';
include_once './modelos/usuarioModel.php';
$usuario = new Usuarios();

class Vista {
    function renderizar($datos) {
        // Mostrar datos en la interfaz
        echo "<ul>";
        foreach ($datos as $dato) {
            echo "<li>$dato</li>";
        }
        echo "</ul>";
    }
}
?>

<?php 
include 'vistas/layers/footer.php';
?>

