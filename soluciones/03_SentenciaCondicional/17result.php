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
          $n = $_POST['n'];

          // si el número 
          if ($n<0){
            $n = -$n;
          }

          if ( $n < 10 ) {
            $primera = n;
          }

          if (( $n >= 10 ) && ( $n < 100 )) {
            $primera = $n / 10;
          }

          if (( $n >= 100 ) && ( $n < 1000 )) {
            $primera = $n / 100;
          }

          if (( $n >= 1000 ) && ( $n < 10000 )) {
            $primera = $n / 1000;
          }

          if ( $n >= 10000 ) {
            $primera = $n / 10000;
          }

          echo "La primera cifra del número introducido es ", floor($primera);
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
