<?php
  $codigo = $_POST['codigo'];
  $descripcion = $_POST['descripcion'];
  $precio_compra = $_POST['precio_compra'];
  $precio_venta = $_POST['precio_venta'];
  $stock = $_POST['stock'];
?>

<div class="panel panel-primary">
  <div class="panel-heading">
    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
      Salida de mercancía
  </div>
  <div class="panel-body">
    Código: <?=$codigo?><br>
    Descripción: <?=$descripcion?><br>
    Precio de compra: <?=$precio_compra?><br>
    Precio de venta: <?=$precio_venta?><br>
    Stock: <?=$stock?><br>
  </div>
    <div class="panel-footer">
      <table>
        <tr>
          <td>
            <form action="pagina.php" method="post">
              <input type="hidden" name="ejercicio" value="04">
              Unidades que salen del almacén: <input type="number" min="0" name="unidades" >
              <input type="hidden" name="stock" value="<?=$stock?>">
              <input type="hidden" name="codigo" value="<?=$codigo?>">
              <input type="hidden" name="accion" value="Salida">
              <button class="btn btn-primary" type="submit" role="button">
                Salida
              </button>
            </form>
          </td>
          <td>&nbsp;</td>
          <td>
            <form>
              <a class="btn btn-danger" href="pagina.php?ejercicio=04" role="button">Cancelar</a>
            </form>
          </td>
        </tr>
      </table>
    </div> 
  </div>
  <br><br>