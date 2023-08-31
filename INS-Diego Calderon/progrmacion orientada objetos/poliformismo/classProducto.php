<?php
class Producto{
    //PROPIEDADES
    public $strDescripcion;
    public $fltPrecio;
    protected $intStockMinimo = 10;
    protected $strStatus = "Activo";

    //METODOS

    function __construct(string $descripcion, float $precio, ){
        $this->strDescripcion = $descripcion;
        $this->fltPrecio = $precio;
    }

    function getInfoProducto(){
        $arrayProducto = [
          'producto'=>$this->strDescripcion,
            'precio'=>$this->fltPrecio,
            'stoc_minimo'=>$this->intStockMinimo,
            'estado'=>$this->strStatus
        ];
        return $arrayProducto;
    }

}