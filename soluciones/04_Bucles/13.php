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
          $cuentaNumeros = $_POST['cuentaNumeros'];
          $n = $_POST['n'];
          $positivos = $_POST['positivos'];

          if (!isset($n)) {
            $cuentaNumeros = 1;
            $positivos = 0;
          } else {
            $cuentaNumeros++;   
          }
          
          if ($n > 0) {
            $positivos++;
          }

          if ($cuentaNumeros == 1) {
            echo "Este programa lee una lista de diez números y determina cuántos son positivos, ";
            echo " y cuántos son negativos.<br>";
          }

          if ($cuentaNumeros < 11) {
          ?>
            <form action="13.php" method="post">
              Número <?php echo $cuentaNumeros; ?> <input type="number" name="n" autofocus>
              <input type="hidden" name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>">
              <input type="hidden" name="positivos" value="<?php echo $positivos; ?>">
              <input type="submit" value="Aceptar">
            </form>
          <?php
          }

          if ($cuentaNumeros == 11) {
            echo "Se han introducido $positivos números positivos y ", (10 - $positivos), " números negativos.<br>";
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
