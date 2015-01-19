<?php

  class Gato {

    // atributos
    
    private $color;
    private $raza;
    private $edad;
    private $peso;
    private $sexo;
    
    
    // métodos
    
    public function __construct($s) {
      $this->sexo = $s;
    }
    
    public function getSexo() {
      return $this->sexo;
    }

    public function maulla() {
      echo "Miauuuu<br>";
    }
    
    public function ronronea() {
      echo "mrrrrrr<br>";
    }
    
    public function come($comida) {
      if ($comida == "pescado") {
        echo "Hmmmm, gracias<br>";
      } else {
        echo "Lo siento, yo solo como pescado<br>";
      }
    }
    
    public function peleaCon($contrincante) {
      if (($this->getSexo()) == "hembra") {
        echo "no me gusta pelear<br>";
      } else if (($contrincante->getSexo()) == "hembra") {
        echo "no peleo contra gatitas<br>";
      } else {
        echo "ven aquí que te vas a enterar<br>";
      }
    }  
  }
