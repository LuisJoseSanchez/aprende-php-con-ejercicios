<?php
  class Persona {
    private $nombre;
    private $profesion;
    private $edad;
    
    // Constructor
    public function __construct($nom, $pro, $edad) {
      $this->nombre = $nom;
      $this->profesion = $pro;
      $this->edad = $edad;
    }

    public function presentarse() {
      return "Hola, me llamo " . $this->nombre . " y soy " . $this->profesion . ".<br>";
    }
    
    public function __toString() {
      return "<hr><b>$this->nombre</b><br>
          Profesión: $this->profesion<br>
          Edad: $this->edad<hr>";
    }
  }
