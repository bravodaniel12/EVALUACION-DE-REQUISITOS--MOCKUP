<?php
require_once ("classPersona.php");
class Cliente extends Persona{

    public  $strCreditos;

    function __construct(int $DPI, string $nombre, int $edad)
    {
        parent::__construct($DPI, $nombre, $edad);
    }
    public function setCreditos($strCreditos): void
    {
        $this->strCreditos = $strCreditos;
    }
    public function getCreditos()
    {
        return $this->strCreditos;
    }

}