<?php
class Restaurante {
    public function __construct() {
        $cajaRegistradora = new CajaRegistradora();
        $chef = new Chef();
        $mesa = new Mesa($cajaRegistradora, $chef);

        $cliente1 = new Cliente("Cliente 1", $mesa);
        $cliente2 = new Cliente("Cliente 2", $mesa);
        $cliente3 = new Cliente("Cliente 3", $mesa);
        $cliente4 = new Cliente("Cliente 4", $mesa);

        $mesa->agregarCliente($cliente1);
        $mesa->agregarCliente($cliente2);

        $menu = new Menu();
        $menu->agregarItem(new Item("Pizza", 4000));
        $menu->agregarItem(new Item("Hamburguesa", 10000));
        $menu->agregarItem(new Item("Ensalada", 2500));
        $menu->agregarItem(new Item("Helado", 1500));
    

        $cliente1->realizarPedido($menu->verMenu()[0]);
        $cliente2->realizarPedido($menu->verMenu()[1]);
        $cliente3->realizarPedido($menu->verMenu()[2]);
        $cliente4->realizarPedido($menu->verMenu()[3]);


        $mesa->enviarPedidoACocina();
        $mesa->cobrarPedido();

        echo "Total de ventas: $" . $cajaRegistradora->verVentasTotales() . "\n";
    }
}
?>
