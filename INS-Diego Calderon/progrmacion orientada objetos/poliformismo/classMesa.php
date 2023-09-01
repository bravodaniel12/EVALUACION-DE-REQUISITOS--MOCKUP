<?php
require_once ("classMueble.php");

class Mesa extends Mueble {
    //PROPIEDADES
    private $strForma;
    protected $strTamanio;

    //METODOS

    public function __construct(string $descripcion, string $precio, string $color, string $material, string $forma, string $tamanio)
    {
        parent::__construct($descripcion, $precio, $color, $material);

        $this->strForma = $forma;
        $this->strTamanio = $tamanio;
    }
    function getInfoProducto(){

        $arrayProducto = "
        Producto: {$this->strDescripcion}<br>
          Precio: {$this->strPrecio}<br>
          Stock_minimo: {$this->intStockMinimo}<br>
          Estado: {$this->strStatus}<br>
          Color: {$this->strColor}<br>
          Material: {$this->strMaterial}<br>
          Tamaño: {$this->strTamanio}<br>
          ";
          return $arrayProducto;
    }
    public function setForma($strForma):void
    {
        $this->$strForma = $strForma;
    }
    public function getForma()
    {
       return $this -> strForma;
    }
}