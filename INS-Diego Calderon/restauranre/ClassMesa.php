<?php
class Mesa {
    private $clientes;
    private $cajaRegistradora;
    private $chef;
    private $pedido;

    public function __construct(CajaRegistradora $cajaRegistradora, Chef $chef) {
        $this->clientes = array();
        $this->cajaRegistradora = $cajaRegistradora;
        $this->chef = $chef;
        $this->pedido = new Pedido();
    }

    public function agregarCliente(Cliente $cliente) {
        $this->clientes[] = $cliente;
    }

    public function agregarPedido(Item $item) {
        $this->pedido->agregarItem($item);
    }

    public function calcularTotal() {
        return $this->pedido->calcularTotal();
    }

    public function cobrarPedido() {
        $total = $this->calcularTotal();
        $this->cajaRegistradora->registrarVenta($total);
        $this->pedido = new Pedido();
    }

    public function enviarPedidoACocina() {
        $this->chef->prepararPedido($this->pedido);
    }
}
?>
