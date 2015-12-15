<?php

class Zona {
  private $descripcion;
  private $aforo;
  private $entradasLibres;
  
  public function __construct($d, $a) {
    $this->descripcion = $d;
    $this->aforo = $a;
    $this->entradasLibres = $a;
  }
  
  public function getDescripcion() {
    return $this->descripcion;
  }
  
  public function getEntradasLibres() {
    return $this->entradasLibres;
  }
  
  public function vende($n) {
    if ($n <= $this->entradasLibres) {
      $this->entradasLibres = $this->entradasLibres - $n;
      return true; // venta satisfactoria
    } else {
      return false; // no se pueden vender más entradas de las que hay en la zona
    }
  }
  
  public function __toString() {
    return  "<b>".$this->descripcion."</b><br>".
        "Aforo total: ".$this->aforo." localidades<br>".
        "Localidades vendidas: ".($this->aforo - $this->entradasLibres)."<br>".
        "Localidades libres: ".$this->entradasLibres."<br><hr>";
  }
}
