<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <?php
    include_once 'Persona.php';
    
    $unTipo = new Persona("Pepe Pérez", "albañil", 30);
    $unNota = new Persona("Rigoberto Peláez", "programador");
    $unTipo->ficha();
    $unNota->ficha();

  ?>
  </body>
</html>
