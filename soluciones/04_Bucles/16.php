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
            Introduzca un número para saber si es primo o no.<br>
            <form action=16.php method="post">
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
        <br><br>
        <a href="index.php">>> Volver</a>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
    </div>
  </body>
</html>
