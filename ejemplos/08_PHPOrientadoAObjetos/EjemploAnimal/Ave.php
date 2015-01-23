<?php

  include_once 'Animal.php';

  class Ave extends Animal {

    public function __construct($s) {
      parent::__construct($s);
    }

    public function aseate() {
      return "Me estoy limpiando las plumas<br>" . parent::aseate();
    }

    public function vuela() {
      return "Estoy volando<br>";
    }
  }
