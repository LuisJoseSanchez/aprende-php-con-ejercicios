<?php
  $n = $_POST['n'];

  if (!isset($n) || ($_SESSION['suma'] <= 10000)) {
  ?>
    <p>
      Este programa muestra la suma, el contador de los números introducidos y la media.<br>
      Vaya introduciendo números, el programa parará cuando la suma de ellos supere 10000.
    </p>
    <form action="pagina.php" method="post">
      <input type="hidden" name="ejercicio" value="03">
      <input type="number" name="n" autofocus required="">
      <input type="submit" value="Aceptar">
    </form>
  <?php
  }

  if (isset($n)) {
    $_SESSION['cuentaNumeros']++;
    $_SESSION['suma'] += $n;

    if ($_SESSION['suma'] > 10000) {
        echo "<br><br>Ha introducido ".$_SESSION['cuentaNumeros']." números.<br>";
        echo "La suma es ".$_SESSION['suma']."<br>";
        echo "La media es ".$_SESSION['suma']/$_SESSION['cuentaNumeros']."<br>";
    }
  }
?>