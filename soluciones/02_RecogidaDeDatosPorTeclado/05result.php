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
          <br>2. Recogida de datos por teclado
        </h2>
      </div>

      <div id="content">
        <?php
          echo "El área del rectángulo es ";
          echo round($_POST['ancho'] * $_POST['alto'], $precision = 2), " cm<sup>2</sup>";
        ?>
      </div>
      
      <div id="footer">
        © Luis José Sánchez González
      </div>
    </div>
  </body>
</html>
