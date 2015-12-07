<?php

  function esPrimo($n) {
    $esPrimo = true;

    for ($i = 2; $i < $n; $i++) {
      if ($n % $i == 0) {
        $esPrimo = false;
      }
    }

    // El 0 y el 1 no se consideran primos
    if (($n == 0) || ($n == 1)) {
      $esPrimo = false;
    }

    return $esPrimo;
  }