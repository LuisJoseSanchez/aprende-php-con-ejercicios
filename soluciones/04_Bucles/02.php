<?php

  if (!isset($_GET['n'])) {
    $contadorNumeros = 1;
    $numeroTexto = "";
  } else {
    $contadorNumeros = $_GET['contadorNumeros'];
    $numeroTexto = $_GET['numeroTexto'];
  }
  
  if ($contadorNumeros < 10) {
    $contadorNumeros = $_GET['contadorNumeros'];
    $n = $_GET['n'];
    $numeroTexto = $_GET['numeroTexto'];

    if ($numeroTexto == "") {
        $numeroTexto = $n;
    } else {
        $numeroTexto = $numeroTexto.' '.$n;
    }
    
    $contadorNumeros++;
  }
  
  if (!isset($_GET['n']) || ($contadorNumeros < 10)) {
  ?>
    <form action="pagina.php" method="get">
      <input type="hidden" name="ejercicio" value="02">
      Introduzca un número:
      <input type="number" name ="n" autofocus="" required="">
      <input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros; ?>">
      <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
      <input type="submit" value="OK">
    </form>
  <?php
  }
  
  ////////////////////////////////////////////////////////////////
  //  Programa principal una vez recogidos los datos del array
  //  El array con los números es $numero
  ////////////////////////////////////////////////////////////////

  if ($contadorNumeros == 10) {
    $numero = explode(" ", $numeroTexto);

    $maximo = -PHP_INT_MAX;
    $minimo = PHP_INT_MAX;

    foreach ($numero as $n) {
      if ($n < $minimo) {
        $minimo = $n;
      }
      if ($n > $maximo) {
        $maximo = $n;
      }
    }

    foreach ($numero as $n) {
      if ($n == $minimo) {
        echo "$n mínimo<br>";
      } else if ($n == $maximo) {
        echo "$n máximo<br>";
      } else {
        echo "$n<br>";
      }
    }
  }