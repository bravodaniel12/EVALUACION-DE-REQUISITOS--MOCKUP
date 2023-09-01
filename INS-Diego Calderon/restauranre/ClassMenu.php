<?php
class Menu {
    private $items;

    public function __construct() {
        $this->items = array();
    }

    public function agregarItem(Item $item) {
        $this->items[] = $item;
    }

    public function verMenu() {
        return $this->items;
    }
}
?>
