<?php
  $codigo = $_POST['codigo'];
  $descripcion = $_POST['descripcion'];
  $precio_compra = $_POST['precio_compra'];
  $precio_venta = $_POST['precio_venta'];
  $stock = $_POST['stock'];
  ?>

<div class="panel panel-primary">
  <div class="panel-heading">
    <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
    Modificación de datos del artículo
  </div>
  <div class="panel-body">
    <form action="pagina.php" method="post">
      <input type="hidden" name="ejercicio" value="04">
      Código: <input type="text" name="codigo" value="<?=$codigo?>" readonly="readonly"><br>
      Descripción: <input type="text" name="descripcion" value="<?=$descripcion?>"><br>
      Precio de compra: <input type="text" name="precio_compra" value="<?=$precio_compra?>" size="60"><br>
      Precio de venta: <input type="text" name="precio_venta" value="<?=$precio_venta?>" size="60"><br>
      Stock: <input type="number" name="stock" value="<?=$stock?>"><br>
  </div>
      <div class="panel-footer">
        <input type="submit" class="btn btn-success" name="accion" value="Modificar">
        <a class="btn btn-danger" href="pagina.php?ejercicio=04" role="button">Cancelar</a>
      </div> 
    </form>
</div>
<br><br>