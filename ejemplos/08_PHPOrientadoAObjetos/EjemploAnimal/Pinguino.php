<?php

  include_once 'Ave.php';

  class Pinguino extends Ave {

    public function __construct($s) {
      parent::__construct($s);
    }

    public function aseate() {
      return parent::aseate() . "A los pingüinos nos gusta asearnos<br>";
    }

    public function vuela() {
      return "No puedo volar<br>";
    }
  }
