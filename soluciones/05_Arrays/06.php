<?php

  if (!isset($_GET['n'])) {
    $contadorNumeros = 1;
    $numeroTexto = "";
  } else {
    $contadorNumeros = $_GET['contadorNumeros'];
    $numeroTexto = $_GET['numeroTexto'];
  }
  
  if ($contadorNumeros < 9) {
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
  
  if (!isset($_GET['n']) || ($contadorNumeros < 16)) {
  ?>
    <form action="pagina.php" method="get">
      <input type="hidden" name="ejercicio" value="06">
      Introduzca un número:
      <input type="number" name ="n" autofocus="" required="">
      <input type="hidden" name="contadorNumeros" value="<?php echo $contadorNumeros; ?>">
      <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
      <input type="submit" value="OK">
    </form>
  <?php
  }

  ////////////////////////////////////////////////////////////////
  //  Programa principal una vez recogidos los datos del array.
  //  El array con los números es $numero
  ////////////////////////////////////////////////////////////////
           
  if ($contadorNumeros == 9) {
    $numero = explode(" ", $numeroTexto);

    foreach ($numero as $n) {
      if ($n % 2 == 0) {
        echo "<span style=\"color: magenta;\">$n&nbsp;&nbsp;</span>";
      } else {
        echo "<span style=\"color: green;\">$n&nbsp;&nbsp;</span>";
      }
    }

    echo "<span style=\"color: magenta;\"><br>pares<br></span>";
    echo "<span style=\"color: green;\">impares</span>";
  }
