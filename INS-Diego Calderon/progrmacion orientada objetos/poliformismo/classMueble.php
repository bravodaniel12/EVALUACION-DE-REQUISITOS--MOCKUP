<?php
require_once ("classProducto.php");
class Mueble extends Producto {
    //PROPIEDADES
    public $strColor;
    public $strMaterial;
    //METODOS

    public function __construct(string $descripcion, float $precio, string $color, string $material)
    {
        parent::__construct($descripcion, $precio);

        $this->strColor = $color;
        $this->strMaterial = $material;
    }

    function getInfoProducto(){
        $arrayProducto = [
            'producto'=>$this->strDescripcion,
            'precio'=>$this->fltPrecio,
            'stoc_minimo'=>$this->intStockMinimo,
            'estado'=>$this->strStatus,
            'color'=>$this->strColor,
            'material'=>$this->strMaterial
        ];
        return $arrayProducto;
    }


}