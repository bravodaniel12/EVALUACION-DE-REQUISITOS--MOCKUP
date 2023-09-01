<?php
class Pedido {
    private $items;

    public function __construct() {
        $this->items = array();
    }
  
    public function agregarItem(Item $item) {
        $this->items[] = $item;
    }

    public function verItems() {
        return $this->items;
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getPrecio();
        }
        return $total;
    }
}

?>
