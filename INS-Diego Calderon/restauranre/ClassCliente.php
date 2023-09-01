<?php
class Cliente {
    private $nombre;
    private $mesa;

    public function __construct($nombre, Mesa $mesa) {
        $this->nombre = $nombre;
        $this->mesa = $mesa;
    }

    public function realizarPedido(Item $item) {
        $this->mesa->agregarPedido($item);
    }

    public function verTotalPedido() {
        return $this->mesa->calcularTotal();
    }
    
}
?>
