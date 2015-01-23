<?php
  class Persona {
    private $nombre;
    private $profesion;
    private $edad;
    
    // Constructor
    public function __construct($nom, $pro, $edad = 25) {
      $this->nombre = $nom;
      $this->profesion = $pro;
      $this->edad = $edad;
    }

    public function presentarse() {
      return "Hola, me llamo " . $this->nombre . " y soy " . $this->profesion . ".<br>";
    }
    
    public function ficha() {
      echo "<hr><b>$this->nombre</b><br>";
      echo "Profesión: $this->profesion<br>";
      echo "Edad: $this->edad<hr>";
    }
  }
