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
          <br>4. Bucles
        </h2>
      </div>

      <div id="content">
        <?php
          $n = $_POST['n'];
        
          if (!isset($n)) {
          ?>
            Este programa muestra los n primeros números de la serie de Fibonacci.<br>
            Por favor, introduzca n:<br>
            <form action="12.php" method="post">
            <input type="number" name="n" autofocus>
            <input type="submit" value="Aceptar">
            </form>
          <?php
          } else {
            $i = 1;
            $f1 = 0;
            $f2 = 1;

            switch ($n) {
              case 1:
                echo "0";
                break;
              case 2:
                echo "0 1";
                break;
              default:
                echo "0 1";
                while($n > 2) {
                  $aux = $f1;
                  $f1 = $f2;
                  $f2 = $aux + $f2;
                  echo " $f2";
                  $n--;
                }
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
