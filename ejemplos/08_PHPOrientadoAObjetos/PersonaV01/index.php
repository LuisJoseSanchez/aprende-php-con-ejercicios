<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
  </head>
  <body>
  <?php
    include_once 'Persona.php';
    
    $unTipo = new Persona("Pepe Pérez", "albañil");
    $unNota = new Persona("Rigoberto Peláez", "programador");
    $unTipo->presentarse();
    $unNota->presentarse();
    var_dump($unNota);
    var_dump($unTipo);
  ?>
  </body>
</html>
