<?php
require_once ("classPersona.php");

class Cliente extends Persona{
//propiedades
    public  $floatCreditos;

//metodos

    function __construct(int $DPI, string $nombre, int $edad)
    {
        parent::__construct($DPI, $nombre, $edad);
    }

    public function setCreditos($intCreditos): void      // set sirve para ingresar datos
    {
        $this->floatCreditos = $intCreditos;
    }

    public function getCreditos()      // get sirve para mostrar datos
    {
        return $this->floatCreditos;
    }

}