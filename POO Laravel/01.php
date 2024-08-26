<?php
require 'includes/header.php';

abstract class Persona {
    private static $contador=0;
    public $html;
    protected string $nombre;
    protected int $edad;
    protected string $email;
    protected int $telefono;
    protected string $nacionalidad;

    public function __construct(string $nombre, int $edad, string $email, int $telefono, string $nacionalidad) 
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->nacionalidad = $nacionalidad;
        self::$contador++;
    }
    public static function getContador()
    {
        return self::$contador;// La forma como se llama es con self a una propiedad statica.
    }
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getTelefono(): int {
        return $this->telefono;
    }

    public function getNacionalidad(): string {
        return $this->nacionalidad;
    }

    public function datos(){
    $html = '<div class="ficha">';
    $html .= '<h2>Mi Ficha</h2>';
    $html .= '<p><strong>Nombre:</strong> ' . $this->nombre . '</p>';
    $html .= '<p><strong>Edad:</strong> ' . $this->edad . '</p>';
    $html .= '<p><strong>Email:</strong> ' . $this->email . '</p>';
    $html .= '<p><strong>Nacionalidad:</strong> ' . $this->nacionalidad . '</p>';
    $html .= '<p><strong>Dirección:</strong> ' . $this->direccion . '</p>';
    $html .= '</div>';
    return $html;
    }

}


