<?php

include_once 'Ave.php';

class Pinguino extends Ave {

  public function __construct($s) {
    parent::__construct($s);
  }

  public function aseate() {
    return parent::aseate().", a los pingüinos nos gusta asearnos";
  }
  
  public function vuela() {
    return "No puedo volar";
  }
  
  public function programa() {
    return "Soy un pingüino programador, estoy programando en PHP";
  }
  
  public function nada() {
    return "Estoy nadando";
  }
}