<?php
date_default_timezone_set('UTC');
class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';
    public $mañana ;

   public function __construct()
    {
        $this->var=$var;
        $this->mañana=$mañana;
    }

    // Declaración de un método
    public function mostrarVar() {
        return "tengo que mostrar";
}
    public function tiempo(){
       echo date('l \t\h\e jS');

    }

}
// Creación de la Clase
    $mostrar = new ClaseSencilla ;
    echo $mostrar->mostrarVar();
    echo "<br>";
    $mostrar->tiempo();
?>