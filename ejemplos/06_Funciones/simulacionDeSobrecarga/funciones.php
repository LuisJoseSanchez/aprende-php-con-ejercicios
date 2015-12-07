<?php
  // Ejemplo de sobrecarga de un método según el
  // número de parámetros que se pasan.
  // 
  // Si se pasa un número, se devuelve el cuadrado;
  // si se pasan dos, se devuelve la multiplicación
  // y si se pasan tres, se devuelve la suma.
  function opera($x, $y, $z) {
    if (!isset($y)) {
      return $x * $x;
    } else if (!isset($z)) {
      return $x * $y;
    } else {
      return $x + $y + $z;
    }
  }
  
  // Ejemplo de sobrecarga de un método según el
  // tipo de los parámetros que se pasan.
  // 
  // Si se pasan dos números enteros se devuelve
  // la suma; en caso contrario se muestran los
  // parametros separados por coma.
  function opera2($a, $b) {
    if (is_int($a) && is_int($b)) {
      return $a + $b;
    } else {
      return $a . ", " . $b;
    }
  }