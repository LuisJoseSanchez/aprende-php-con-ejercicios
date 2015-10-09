<?php
  $n = $_GET['n'];
  $contadorNumeros = $_GET['contadorNumeros'];
  $numeroTexto = $_GET['numeroTexto'];

  if (!isset($n)) {
    $contadorNumeros = 0;
    $numeroTexto = "";
  }
  
  ////////////////////////////////////////////////////////////////
  //  Programa principal una vez recogidos los datos del array.
  //  El array con los números es $numero
  ////////////////////////////////////////////////////////////////

  if ($contadorNumeros == 10) {
    $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
    $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes
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
  ////////////////////////////////////////////////////////////////
  
  
  
  // Pide número y añade el actual a la cadena
  if (($contadorNumeros < 10) || (!isset($n))) {
    ?>
    <form action="pagina.php" method="get">
      <input type="hidden" name="ejercicio" value="02">
      Introduzca un número:
      <input type="number" name ="n" autofocus>
      <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
      <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
      <input type="submit" value="OK">
    </form>
    <?php
  }
  
