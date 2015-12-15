<?php

class Vehiculo {
  // Variables de clase
  private static $kmTotales = 0;
  private static $vehiculosCreados = 0;
  
  // Variables de instancia
  private $kmRecorridos;
  
  // Métodos de clase
  
  public static function getVehiculosCreados() {
    return Vehiculo::$vehiculosCreados;
  }
  
  public static function getKmTotales() {
    return Vehiculo::$kmTotales;
  }

  // Métodos de instancia
  public function __construct() {
    Vehiculo::$vehiculosCreados++;
    $this->kmRecorridos = 0;
  }

  public function getKmRecorridos() {
    return $this->kmRecorridos;
  }
  
  public function recorre($km) {
    $this->kmRecorridos += $km;
    Vehiculo::$kmTotales += $km;
  }
}
