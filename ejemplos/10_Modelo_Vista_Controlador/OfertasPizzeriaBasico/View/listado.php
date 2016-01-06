<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Listado de ofertas</title>
  </head>
  <body>
  <h1>Pizzeria Peachepe</h1>
  <a href="../Controller/nuevaOferta.php">Nueva oferta</a>
  <hr>
  <?php
    foreach($data['ofertas'] as $oferta)  {
    ?>
      <h3><?=$oferta->getTitulo()?></h3>
      <img src="../View/images/<?=$oferta->getImagen()?>" width="400"><br>
      <p><?=$oferta->getDescripcion()?></p><br>
      <a href="../Controller/borraOferta.php?id=<?=$oferta->getId()?>">Borrar</a>
    <?php
    }
  ?>
  </body>
</html>
