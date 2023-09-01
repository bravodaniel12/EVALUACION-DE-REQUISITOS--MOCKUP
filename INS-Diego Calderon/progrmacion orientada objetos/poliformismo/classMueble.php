<?php
require_once ("classProducto.php");
class Mueble extends Producto {
    //PROPIEDADES
    public $strColor;
    public $strMaterial;
    //METODOS

    public function __construct(string $descripcion, string $precio, string $color, string $material)
    {
        parent::__construct($descripcion, $precio);

        $this->strColor = $color;
        $this->strMaterial = $material; 
    }

     function getInfoProducto(){

        $arrayProducto = "
        Producto: {$this->strDescripcion}<br>
          Precio: {$this->strPrecio}<br>
          Stoc_minimo: {$this->intStockMinimo}<br>
          Estado: {$this->strStatus}<br>
          Color: {$this->strColor}<br>
          Material: {$this->strMaterial}<br>
          ";
          return $arrayProducto;
    }


}