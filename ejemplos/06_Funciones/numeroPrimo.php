<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
      $n = $_POST['n'];

      if (!isset($n)) {
      ?>
        Introduzca un número para saber si es primo o no.<br>
        <form action=numeroPrimo.php method="post">
          <input type="number" name="n" min="0" autofocus><br>
          <input type="submit" value="Aceptar">
        </form>
      <?php
      } else {
        $esPrimo = true;

        for ($i = 2; $i < $n; $i++) {
          if ($n % $i == 0) {
            $esPrimo = false;
          }
        }

        // El 0 y el 1 no se consideran primos
        if (($n == 0) || ($n == 1)) {
          $esPrimo = false;
        }

        if ($esPrimo) {
            echo "El $n es primo.";
        } else {
            echo "El $n no es primo.";
        }
      }
    ?>
  </body>
</html>