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
          <br>3. Sentencia condicional
        </h2>
      </div>

      <div id="content">
        <?php
          $a = $_POST['a'];
          $b = $_POST['b'];
          $c = $_POST['c'];

          
          // 0x^2 + 0x + 0 = 0

          if (($a == 0) && ($b == 0) && ($c == 0)) {
            echo  "La ecuación tiene infinitas soluciones.";
          }

          
          // 0x^2 + 0x + c = 0  con c distinto de 0

          if (($a == 0) && ($b == 0) && ($c != 0)) {
            echo  "La ecuación no tiene solución.";
          }

          
          // ax^2 + bx + 0 = 0  con a y b distintos de 0

          if (($a != 0) && ($b != 0) && ($c == 0)) {
            echo  "x<sub>1</sub> = 0";
            echo  "<br>x<sub>2</sub> = ", (-$b / $a);
          }


          // 0x^2 + bx + c = 0  con b y c distintos de 0

          if (($a == 0) && ($b != 0) && ($c != 0)) {
                  echo  "x<sub>1</sub> = x<sub>2</sub> = ", (-$c / $b);
          }

          
          // ax^2 + bx + c = 0  con a, b y c distintos de 0

          if (($a != 0) && ($b != 0) && ($c != 0)) {  

            $discriminante = ($b * $b) - (4 * $a * $c);

            if ($discriminante < 0) {
              echo  "La ecuación no tiene soluciones reales";
            } else {
              echo  "x<sub>1</sub> = ", (-$b + sqrt($discriminante)) / (2 * $a);
              echo  "<br>x<sub>2</sub> = ", (-$b - sqrt($discriminante)) / (2 * $a);
            }
          }
        ?>
        <br><br>
        <a href="index.php">>> Volver</a>
      </div>
      
      <div id="footer">
        © Luis José Sánchez González
      </div>
      
    </div>
  </body>
</html>
