<?php
  session_start();

  include_once 'MonstruoDeLasGalletas.php';
  
  if (!isset($_SESSION['coco'])) {
    $_SESSION['coco'] = serialize(new MonstruoDeLasGalletas());
  }
  
  $coco = unserialize($_SESSION['coco']);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
  <?php
    
    
    $numeroDeGalletas = $_POST['numeroDeGalletas'];
    if (isset($numeroDeGalletas)) {
      $coco->come($numeroDeGalletas);
    }
    ?>
    
    <h2>Soy Coco y he comido <?=$coco->getGalletas(); ?> galletas.</h2>
    <form action="index.php" method="POST">
      Nº de galletas:
      <input type="number" name="numeroDeGalletas" min="1">
      <input type="submit" value="Comer">
    </form>
    
    <?php
      $_SESSION['coco'] = serialize($coco);
    ?>
    
  </body>
</html>
