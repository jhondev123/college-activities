<?php
class Cliente extends Pessoa{
private $pedidos;
public function __construct()
{
    
}
/**
 * Get the value of pedidos
 */ 
public function getPedidos()
{
return $this->pedidos;
}

/**
 * Set the value of pedidos
 *
 * @return  self
 */ 
public function setPedidos($pedidos)
{
$this->pedidos = $pedidos;

return $this;
}
}
?>