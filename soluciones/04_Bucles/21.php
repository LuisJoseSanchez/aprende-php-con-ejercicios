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
          $cuentaNumeros = $_POST['cuentaNumeros'];
          $sumaImpares = $_POST['sumaImpares']; 
          $cuentaImpares = $_POST['cuentaImpares'];
          $mayorPar = $_POST['mayorPar'];
          
          // Se inicializan los valores en la primera carga de página
          if (!isset($n)) {
            $cuentaNumeros = 0;
            $sumaImpares = 0; 
            $cuentaImpares = 0;
            $mayorPar = -PHP_INT_MIN;
          }
      
          if ($n > 0) {
            $cuentaNumeros++;
            if ($n % 2 == 0) {
              if ($n > $mayorPar) {
                $mayorPar = $n;
              } else {
                $cuentaImpares++;
                $sumaImpares += $n;
              }
            }
          }

          // Muestra el formulario en la primera carga de página y mientras se introduzcan números positivos
          if ((!isset($n)) || ($n > 0)) {
          ?>
            Introduzca un número. Si quiere terminar, introduzca un número negativo.<br>
            <form action="21.php" method="post">
              <input type="number" name="n" autofocus=""><br>
              <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
              <input type="hidden" name="sumaImpares" value="<?php echo $sumaImpares; ?>">
              <input type="hidden" name="cuentaImpares" value="<?php echo $cuentaImpares; ?>">
              <input type="hidden" name="mayorPar" value="<?php echo $mayorPar; ?>">
              <input type="submit" value="Aceptar">
            </form>
          <?php
          }
          
          // Muestra el resultado
          if ($n < 0) {
            echo "Se han introducido $cuentaNumeros números <br>";
            echo "La media de los impares es ".($sumaImpares / $cuentaImpares)."<br>";
            echo "El mayor de los pares es $mayorPar<br>";
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
