<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <?php
    include_once 'Persona.php';
    include_once 'Perro.php';
    
    $unTipo = new Persona("Pepe Pérez", "albañil");
    $unNota = new Persona("Rigoberto Peláez", "programador");
    echo $unTipo->presentarse();
    echo $unNota->presentarse();

  ?>
  </body>
</html>
