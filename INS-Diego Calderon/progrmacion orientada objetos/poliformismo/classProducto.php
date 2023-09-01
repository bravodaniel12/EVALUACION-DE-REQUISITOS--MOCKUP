<?php
class Producto{
    //PROPIEDADES
    public $strDescripcion;
    public $strPrecio;
    protected $intStockMinimo = 10;
    protected $strStatus = "Activo";

    //METODOS

    function __construct(string $descripcion, string $precio ){
        $this->strDescripcion = $descripcion;
        $this->strPrecio = $precio;
    }

    public function getInfoProducto(){
        $arrayProducto = "
          Producto: {$this->strDescripcion}<br>
            Precio: {$this->strPrecio}<br>
            Stock_minimo: {$this->intStockMinimo}<br>
            Estado: {$this->strStatus}<br>
            ";
        return $arrayProducto;
    }

}