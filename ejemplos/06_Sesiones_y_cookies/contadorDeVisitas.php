<?php
  session_start(); // Inicio de sesión
  
  if(isset($_SESSION['visitas'])) {
    $_SESSION['visitas']++;
  } else {
    $_SESSION['visitas'] = 1;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      echo "Visitas: ".$_SESSION['visitas'];
    ?>
  </body>
</html>
