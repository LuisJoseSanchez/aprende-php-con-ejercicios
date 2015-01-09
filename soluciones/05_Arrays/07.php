<?php
  // Genera el array aleatorio
  for ($i = 0; $i < 20; $i++) {
    $numero[$i] = rand(0, 100);
  }

  // Muestra el array original

  // Índice
  echo "Array original:<br>";
  echo "<table><tr>";
  for ($i = 0; $i < 20; $i++) {
    echo "<td>$i</td>";
  }
  echo "</tr>";

  // Contenido
  for ($i = 0; $i < 20; $i++) {
    echo "<td>".$numero[$i]."</td>";
  }
  echo "</tr></table>";

  // Guarda los pares y los impares en arrays diferentes
  $cuentaPares = 0;
  $cuentaImpares = 0;

  for ($i = 0; $i < 20; $i++) {
    if ($numero[$i] % 2 == 0) {
      $pares[$cuentaPares] = $numero[$i];
      $cuentaPares++;
    } else {
      $impares[$cuentaImpares] = $numero[$i];
      $cuentaImpares++;
    }
  }

  // Guarda los datos en el array original
  // según lo que pide el ejercicio

  for ($i = 0; $i < $cuentaPares; $i++) {
    $numero[$i] = $pares[$i];
  }

  for ($i = $cuentaPares; $i < $cuentaPares + $cuentaImpares; $i++) {
    $numero[$i] = $impares[$i - $cuentaPares];
  }

  // Muestra el array resultante

  // Índice
  echo "<br>Array resultante con los pares al principio y los impares al final:<br>";
  echo "<table><tr>";
  for ($i = 0; $i < 20; $i++) {
    echo "<td>$i</td>";
  }
  echo "</tr>";

  // Contenido
  for ($i = 0; $i < 20; $i++) {
    echo "<td>".$numero[$i]."</td>";
  }
  echo "</tr></table>";