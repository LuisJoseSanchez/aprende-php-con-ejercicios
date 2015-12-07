<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capítulo 8 - Acceso a Bases de Datos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Pagina principal</a></li>
            <li><a href="https://github.com/LuisJoseSanchez/aprende-php-con-ejercicios">GitHub</a></li>
            <li><a href="#"></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div class="container">
      
      <div class="jumbotron">
        <h3 class="text-center">APRENDE PHP CON EJERCICIOS</h3>
        <h4 class="text-center">SOLUCIONES A LOS EJERCICIOS</h4>
        <h4 class="text-center">8. Acceso a Bases de Datos</h4>
      </div>
    
        <?php
          include $_REQUEST['ejercicio'].'.php';
        ?>
        
    </div>
 
    <div id="footer">
      <p class="text-center">© Luis José Sánchez González</p>
    </div>
    
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
