<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      if (!isset($_GET['n'])) {
        $contadorNumeros = 1;
        $numeroTexto = "";
        echo '<form action="#" method="get">';
        echo 'Introduzca un número:';
        echo '<input type="text" name ="n" autofocus>';
        echo '<input type="hidden" name="contadorNumeros" value="'.$contadorNumeros.'">';
        echo '<input type="submit" value="OK">';
        echo '</form>';
      } else {
        $contadorNumeros = $_GET['contadorNumeros'];
        $n = $_GET['n'];
        $numeroTexto = $_GET['numeroTexto'];

        if ($numeroTexto=="") {
          $numeroTexto = $n;
        } else {
          $numeroTexto = $numeroTexto.' '.$n;
        }

        if ($contadorNumeros < 4) {
          $contadorNumeros++;
          echo '<form action="#" method="get">';
          echo 'Introduzca un número:';
          echo '<input type="text" name="n" autofocus>';
          echo '<input type="hidden" name="contadorNumeros" value="'.$contadorNumeros.'">';
          echo '<input type="hidden" name="numeroTexto" value="'.$numeroTexto.'">';
          echo '<input type="submit" value="OK">';
          echo '</form>';
        } else {
          $numero = explode(" ", $numeroTexto);
          echo "Los números introducidos son: ";
          foreach ($numero as $n)
          echo $n, "  ";
        }
      }
    ?>
  </body>
</html>
