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
          $hora = $_POST['hora'];
          $minuto = $_POST['minuto'];

          $segundosTranscurridos = ($hora * 3600) + ($minuto * 60);
          $segundosHastaMedianoche = (24 * 3600) - $segundosTranscurridos;

          echo "Desde las $hora:$minuto hasta la medianoche faltan ";
          echo "$segundosHastaMedianoche segundos.";
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
