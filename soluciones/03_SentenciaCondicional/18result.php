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

          // si el número es negativo, se le quita el signo
          if ($n < 0){
            $n = -$n;
          }
          
          if ( $n < 10 ) {
            $digitos = 1;
          }
          
          if (( $n >= 10 ) && ( $n < 100 )) {
            $digitos = 2;
          }
          
          if (( $n >= 100 ) && ( $n < 1000 )) {
            $digitos = 3;
          }
          
          if (( $n >= 1000 ) && ( $n < 10000 )) {
            $digitos = 4;
          }
          
          if ( $n >= 10000 ) {
            $digitos = 5;
          }

          echo "El número introducido tiene $digitos dígitos.";
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
