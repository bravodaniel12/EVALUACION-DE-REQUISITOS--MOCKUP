<?php
require_once ("classMueble.php");

class Mesa extends Mueble{
    //PROPIEDADES
    private $strForma;
    protected $strTamanio;

    //METODOS

    public function __construct(string $descripcion, float $precio, string $color, string $material, string $forma, string $tamanio)
    {
        parent::__construct($descripcion, $precio, $color, $material);

        $this->strForma = $forma;
        $this->strColor = $tamanio;
    }
}