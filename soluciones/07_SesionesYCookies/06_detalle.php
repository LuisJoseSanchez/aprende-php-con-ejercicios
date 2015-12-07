<h3>Detalle del producto</h3><hr>
<?php
  $codigo = $_POST['codigo'];
  $producto = $_SESSION['producto'];
  $elemento = $producto[$codigo];
  ?>
  <img src="img/<?= $elemento[imagen] ?>" width="360" border="1"><br>
  <?= $elemento[nombre] ?><br>Precio: <?= $elemento[precio] ?> €
  Unidades de este producto en el carrito: <?= $_SESSION[carrito][$codigo] ?>;
  <br><?= $elemento[detalle] ?>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="06">
    <input type="hidden" name="codigo" value="<?= $codigo ?>">
    <input type="hidden" name="accion" value="comprar">
    <input type="submit" value="Comprar">
  </form>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="06">
    <input type="submit" value="Volver a la tienda">
  </form>
  <br><br>