<?php
class Persona {

    //PROPIEDADES

    public $intDpi;
    public $strNombre;
    public $intEdad;
    

    //METODOS

    function __construct(int $DPI, string $nombre, int $edad,){
        $this ->intDpi = $DPI;
        $this->strNombre = $nombre;
        $this->intEdad = $edad;
       
    }


    public function getDatosPersonales(){
        $datos = "
        <h2> DATOS PERSONALES </h2><br>
        DPI: {$this -> intDpi}<br>
        Nombre: {$this -> strNombre}<br>
        Edad: {$this ->intEdad}<br>
        ";
        return $datos;
    }

    public function getDatosPersonalesCliente(){
        $datos1 = "
        <h2> DATOS PERSONALES </h2><br>
        DPI: {$this -> intDpi}<br>
        Nombre: {$this -> strNombre}<br>
        Edad: {$this ->intEdad}<br>
        ";
        return $datos1;
    }
}