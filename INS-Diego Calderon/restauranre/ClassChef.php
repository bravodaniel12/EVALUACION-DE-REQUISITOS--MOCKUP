<?php

class Chef {
    public function prepararPedido(Pedido $pedido) {
        echo "Menu Disponible: \n";
        echo "<br>";
        echo "Pizza-$4000\n";
        echo "<br>";
        echo "Hamburguesa-$10000\n";
        echo "<br>";
        echo "Ensalada-$2500\n";
        echo "<br>";
        echo "<br>";
        echo "Mesa 1 \n";
        echo "<br>";
        echo "El chef está preparando el pedido de:\n";
        
        
        foreach ($pedido->verItems() as $item) {
            echo "- " . $item->getNombre() . " ($" . $item->getPrecio() . ")\n";
        }
       
        $total = $pedido->calcularTotal();
        echo "<br>";
        echo "Total del pedido: $" . $total . "\n";
        echo "<br>";
        echo "Pedido listo para ser servido.\n";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        echo "Mesa 2 \n";
        echo "<br>";
        echo "El chef está preparando el pedido de:\n";
        
        
        foreach ($pedido->verItems() as $item) {
            echo "- " . $item->getNombre() . " ($" . $item->getPrecio() . ")\n";
        }
       
        $total = $pedido->calcularTotal();
        echo "<br>";
        echo "Total del pedido: $" . $total . "\n";
        echo "<br>";
        echo "Pedido listo para ser servido.\n";
        echo "<br>";
    }
} 
