<?php
  if (!isset($_GET['numeroTexto'])) {
    // Genera el array aleatorio
    for ($i = 0; $i < 100; $i++) {
        $numero[$i] = rand(0, 20);
        echo $numero[$i]." ";
    }

    $numeroTexto = implode(" ", $numero);
    ?>
    <br><br>
    <form action="pagina.php" method="get">
      <input type="hidden" name="ejercicio" value="04">
      Valor a sustituir: <input type="number" name ="viejo" autofocus="" required=""><br>
      Valor nuevo: <input type="number" name ="nuevo" required="">
      <input type="hidden" name="numeroTexto" value="<?php echo $numeroTexto; ?>">
      <input type="submit" value="OK">
    </form>
    <?php
  } else {
    $numeroTexto = $_GET['numeroTexto'];
    $viejo = $_GET['viejo'];
    $nuevo = $_GET['nuevo'];

    $numero = explode(" ", $numeroTexto);

    foreach ($numero as $n) {
      if ($n == $viejo) { 
        echo "<span style=\"color: green; font-weight: bold;\">$nuevo</span> ";
      } else {
        echo  "$n ";
      }
    }
  }
