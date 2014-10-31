<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>
          APRENDE PHP CON EJERCICIOS
        </h1>
        <h2>
          SOLUCIONES A LOS EJERCICIOS
        </h2>
        <h2>
          <br>1. Salida por pantalla y variables
        </h2>
      </div>

      <div id="content">
        <?php
          $x = 144;
          $y = 999;

          echo "x = ", $x;
          echo "<br>y = ", $y;
          echo "<br>x + y = ", $x + $y;
          echo "<br>x - y = ", $x - $y;
          echo "<br>x / y = ", $x / $y;
          echo "<br>x * y = ", $x * $y;
        ?>
                
        <br><br><hr><br>Código fuente:<br>
        <?php
          highlight_string('
          <?php
            $x = 144;
            $y = 999;

            echo "x = ", $x;
            echo "<br>y = ", $y;
            echo "<br>x + y = ", $x + $y;
            echo "<br>x - y = ", $x - $y;
            echo "<br>x / y = ", $x / $y;
            echo "<br>x * y = ", $x * $y;
          ?>
          ');
        ?>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
    </div>
  </body>
</html>
