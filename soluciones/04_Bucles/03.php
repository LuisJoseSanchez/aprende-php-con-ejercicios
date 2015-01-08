<?php

  if (!isset($_GET['n'])) {
    $contadorNumeros = 1;
    $numeroTexto = "";
  } else {
    $contadorNumeros = $_GET['contadorNumeros'];
    $numeroTexto = $_GET['numeroTexto'];
  }
  
  if ($contadorNumeros < 16) {
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
      <input type="hidden" name="ejercicio" value="03">
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

  if ($contadorNumeros == 16) {
    $numero = explode(" ", $numeroTexto);

    // Muestra el array original
    echo "Array original:<br>";
    echo "<table><tr>";

    for ($i = 0; $i < 15; $i++) {
      echo "<td>$i</td>";
    }

    echo "</tr>";

    for ($i = 0; $i < 15; $i++) {
       echo "<td>".$numero[$i]."</td>";
    }

    echo "</tr></table>";


    // Rota los elementos del array hacia la derecha

    $aux = $numero[14];

    for ($i = 14; $i > 0; $i--) {
      $numero[$i] = $numero[$i - 1];
    }

    $numero[0] = $aux;


    // Muestra el array rotado

    echo "<br>Array rotado:<br>";
    echo "<table><tr>";

    for ($i = 0; $i < 15; $i++) {
      echo "<td>$i</td>";
    }

    echo "</tr>";

    for ($i = 0; $i < 15; $i++) {
      echo "<td>".$numero[$i]."</td>";
    }

    echo "</tr></table>";
  }
?>
