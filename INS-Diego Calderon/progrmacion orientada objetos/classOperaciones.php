<?php
      /* La primera letra en mayuscula como la O de abajo */
class Operaciones {
//PROPIEDADES

public $IntCantidadUno = 0;
public $IntCantidadDos = 0;
public $floatResultado = 0;
//METODOS

public function __construct(int $val1, int $val2){

      //el this ayuda a seleccionar o a buscar algo como por ejemplo IntCantidadUno
       $this -> IntCantidadUno = $val1;
       $this -> IntCantidadDos = $val2;
}
public function suma(){
    $this -> floatResultado = $this -> IntCantidadUno + $this -> IntCantidadDos;
    
    return $this -> floatResultado;
}
public function resta(){
      $this -> floatResultado = $this -> IntCantidadUno - $this -> IntCantidadDos;
      
      return $this -> floatResultado;
  }
  public function divicion(){
      $this -> floatResultado = $this -> IntCantidadUno / $this -> IntCantidadDos;
      
      return $this -> floatResultado;
  }
  public function multiplicacion(){
      $this -> floatResultado = $this -> IntCantidadUno * $this -> IntCantidadDos;
      
      return $this -> floatResultado;
  }
}