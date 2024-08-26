<?php

/* Creando clases y objetos */
class Persona
{
    public $nombre;
    public $nacionalidad;
    public $genero;
    public $edad;

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setEdad($edad){
        $edad = rand(10,70);
        $this->edad=$edad;
    }
    public function getEdad(){
        $edad = rand(10,70);
        return $edad;
    }
    public function cumpleanos(){
        echo $this->edad+1;


    }
    public function sacadni($edad){
        if ($edad>18) {
            echo "Ya tengo DNI";
        }else{
            echo "Aún no me corresponde un DNI";
        }
    }


}


?>