<style type="text/css">
  table, th, td {
    border: 0px;
    text-align: center;
  }
  td.negro {
    background-color: black;
  }
  td.blanco {
    background-color: white;
  }
  tr.marron {
    background-color: brown;
  }
</style>

<h2> Movimiento de un alfil</h2>
<?php
  // Recoge la posición del alfil
  $posicion = $_GET['posicion'];
  $x = ord(substr($posicion, 0, 1)) - ord('a');
  $y = 8 - substr($posicion, 1, 1);

  // Pinta el tablero de ajedrez
  $color = "blanco"; // color de la primera casilla
  echo '<table><tr class="marron">';
  echo '<td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td><td></td></tr>';
  for ($fila = 0; $fila < 8; $fila++) {
    echo '<tr><td style="text-align: right; background-color: brown;">'.(8 - $fila).'</td>';
    for ($columna = 0; $columna < 8; $columna++) {
      echo "<td class=\"$color\">";

      // Comprueba si el alfil está en la posición actual
      if (($x == $columna) && ($y == $fila)) {
        echo '<img src="alfil.png">';
      // Comprueba si es una posición a la que puede llegar el alfil
      } else if (abs((abs($x) - abs($columna))) == abs((abs($y) - abs($fila)))) {
        echo '<img src="alfilsemitransparente.png">';
      } else {
        echo '<img src="vacio.png">';
      }
      echo "</td>";

      // Alterna el color de la casilla
      if ($color == "blanco") {
        $color = "negro";
      } else {
        $color = "blanco";
      }
      echo "</td>";
    }
    if ($color == "blanco") {
      $color = "negro";
    } else {
      $color = "blanco";
    }
    echo '<td style="text-align: left; background-color: brown;">'.(8 - $fila).'</td></tr>';
  }
  ?>
  <tr class="marron">
    <td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td><td></td>
  </tr>
  </table>

  <br>
  Introduzca las coordenadas del alfil (p. ej. e4)
  <br>
  <form action="pagina.php" method="get">
    <input type="hidden" name="ejercicio" value="14">
    <input type="text" name="posicion" autofocus="" required=""><br>
    <input type="submit" value="Aceptar">
  </form>
