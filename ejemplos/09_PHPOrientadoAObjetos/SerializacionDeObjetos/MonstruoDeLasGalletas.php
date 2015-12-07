<?php

  class MonstruoDeLasGalletas {
    
    private $galletas; // galletas comidas
    
    public function __construct($s) {
      $this->galletas = 0;
    }
    
    public function getGalletas() {
      return $this->galletas;
    }
    
    public function come($g) {
      $this->galletas = $this->galletas + $g;
    }
  }