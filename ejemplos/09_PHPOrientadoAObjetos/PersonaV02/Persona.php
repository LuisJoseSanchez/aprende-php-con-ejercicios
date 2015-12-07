<?php
  class Persona {
    private $nombre;
    private $profesion;
    
    // Constructor
    public function __construct($nom, $pro) {
      $this->nombre = $nom;
      $this->profesion = $pro;
    }

    public function presentarse() {
      return "Hola, me llamo " . $this->nombre . " y soy " . $this->profesion . ".<br>";
    }
  }
