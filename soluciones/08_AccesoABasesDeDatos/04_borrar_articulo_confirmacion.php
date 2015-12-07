<?php
  $codigo = $_POST['codigo'];
  $descripcion = $_POST['descripcion'];
  $precio_compra = $_POST['precio_compra'];
  $precio_venta = $_POST['precio_venta'];
  $stock = $_POST['stock'];
  ?>
  <h3 class="text-center">Se borrará el siguiente artículo de la base de datos:</h3>
  <hr>

  <div class="panel panel-primary">
    <div class="panel-heading">
      Código: <?=$codigo?>
    </div>
    <div class="panel-body">
      Descripción: <?=$descripcion?><br>
      Precio de compra: <?=$precio_compra?><br>
      Precio de venta: <?=$precio_venta?><br>
      Stock: <?=$stock?><br>

      <hr>¿Está seguro?

      <table>
        <tr>
          <td>
            <form action="pagina.php" method="post">
              <input type="hidden" name="ejercicio" value="04">
              <input type="hidden" name="codigo" value="<?=$codigo?>">
              <input type="hidden" name="accion" value="Eliminar">
              <button type="submit" class="btn btn-primary">
                Eliminar
              </button>
            </form>
          </td>
          <td>&nbsp;</td>
          <td>
            <a class="btn btn-danger" href="pagina.php?ejercicio=04" role="button">Cancelar</a>
          </td>
        </tr>
      </table>
    </div>
  </div>