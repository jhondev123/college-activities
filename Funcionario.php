<?php
class Funcionario extends Pessoa{
private $pis;
public function __construct()
{
}
/**
 * Get the value of pis
 */ 
public function getPis()
{
return $this->pis;
}
/**
 * Set the value of pis
 *
 * @return  self
 */ 
public function setPis($pis)
{
$this->pis = $pis;
return $this;
}
}
?>