<?php

include_once 'Vehiculo.php';

class Bicicleta extends Vehiculo {

  private $numeroDeMarchas;

  public function __construct($n) {
    parent::__construct();
    $this->numeroDeMarchas = $n;
  }
  
  public function hazCaballito() {
    return "Estoy haciendo el caballitooooooo";
  }
}
