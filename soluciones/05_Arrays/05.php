<?php
  if (!isset($_GET['temperatura'])) {
    // Pide los datos de las temperaturas
    $mes = array(
      "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
      "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    ?>
    Por favor, introduzca la temperatura media de cada mes.<br>
    <form action="pagina.php" method="get">
      <input type="hidden" name="ejercicio" value="05">
      <?php
      for ($i = 0; $i < 12; $i++) {
        echo "$mes[$i]: <input type=\"number\" name =\"temperatura[$mes[$i]]\"><br>";
      }
      ?>
      <input type="submit" value="OK">
    </form>
    <?php                       
  } else {
    // Pinta el diagrama de barras
    $temperatura = $_GET['temperatura'];
    echo "<table>";
    foreach($temperatura as $mes => $temperaturaMes) {
      echo "<tr><td>$mes </td><td>";
      // Pinta la barra
      for ($i = 0; $i < $temperaturaMes; $i++) {
        echo "<img src=\"bggreen.png\">";
      }
      echo " $temperaturaMes"."ºC<br></td></tr>";
    }
    echo "</table>";
  }
