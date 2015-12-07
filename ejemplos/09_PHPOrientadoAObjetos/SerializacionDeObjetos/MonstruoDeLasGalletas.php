<?php

  class MonstruoDeLasGalletas {
    
    private $galletas; // galletas comidas
    
    
    // métodos
    
    public function __construct($s) {
      $this->galletas = 0;
    }
    
    public function getGalletas() {
      return $this->galletas;
    }
    
    public function come($g) {
      echo "entro en come";
      $this->galletas = $this->galletas + $g;
    }
  
  }
