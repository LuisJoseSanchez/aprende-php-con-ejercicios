<?php

include_once 'Mamifero.php';

class Perro extends Mamifero {
  
  private $raza;
  
  public function __construct($s, $r) {
    parent::__construct($s);
    if (isset($r)) {
      $this->raza = $r;
    } else {
      $this->raza = "pastor alemán";
    }
  }
  
  public function __toString() {
    return parent::__toString()."<br>Raza: $this->raza";
  }
  
  public function ladra() {
    return "Guauuuu";
  }
  
  public function dameLaPata() {
    return "Toma mi patita";
  }
  
  public function caza() {
    return "Estoy cazando perdices";
  }
}

