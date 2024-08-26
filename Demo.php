<?php 

class Demo
{
    public $nombre;
    public $edad;
    function __construct($n, $e) {
        $this->nombre = $n;
        $this->edad = $e;
    }   
    function mostrar(){
        
        return $this->nombre." Tiene ".$this->edad. " años";
        }
        }
      
    


 ?>