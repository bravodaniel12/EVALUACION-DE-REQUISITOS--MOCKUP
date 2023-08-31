<?php
require_once ("classPersona.php");

class Empleado extends Persona{

    //propiedades

    public $strPuestos;


    // metodos

    function __construct(int $DPI, string $nombre, int $edad )
    {
        parent::__construct($DPI, $nombre, $edad );
    }


    public function setPuestos($strPuestos): void
    {
        $this -> $strPuestos = $strPuestos;
    }

    public function getPuestos()
    {
        return $this -> strPuestos;
    }

}