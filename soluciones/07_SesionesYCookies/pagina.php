<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="css/default.css" rel="stylesheet" type="text/css" />
    <title>Soluciones a los ejercicios - 7. Sesiones y cookies</title>
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
          <br>7. Sesiones y Cookies
        </h2>
      </div>

      <div id="content">
    
        <?php
          include $_REQUEST['ejercicio'].'.php';
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
