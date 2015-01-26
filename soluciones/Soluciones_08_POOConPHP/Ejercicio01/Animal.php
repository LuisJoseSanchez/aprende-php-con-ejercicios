<?php

class Animal {

  private $sexo;
  
  public function __construct($s) {
    if (!isset($s)) {
      $this->sexo = "macho";
    } else {
      $this->sexo = $s;
    }
  }

  public function __toString() {
    return "Sexo: $this->sexo";
  }
  
  public function getSexo() {
    return $this->sexo;
  }

  public function come($comida) {
    return "Estoy comiendo $comida";
  }
  
  public function duerme() {
    return "Zzzzzzz";
  }
}
