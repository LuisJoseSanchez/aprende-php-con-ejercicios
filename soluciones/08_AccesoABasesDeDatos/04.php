<h2 class="text-center">G E S T I S I M A L</h2>
<hr>
<?php

    if(!isset($_SESSION['pagina'])) {
      $_SESSION['pagina'] = 1;
    }

    $conexion = mysql_connect("localhost", "root", "root");
    mysql_select_db("gestisimal", $conexion);
    mysql_set_charset('utf8');

    
    // Inserta un nuevo artículo en la base de datos.
    // Comprueba si el código ya existe.
    
    if($_POST['accion'] == "Nuevo articulo") {
      // Comprueba si existe el DNI
      $buscaCodigo = 'SELECT * FROM articulo WHERE codigo="'.$_POST[codigo].'"';
      $consulta = mysql_query($buscaCodigo, $conexion);

      if (mysql_num_rows($consulta) == 1) {
        echo '<script type="text/javascript">alert("Lo siento, ya existe un artículo con ese código en la base de datos");</script>';
      } else {
        $inserta = "INSERT INTO articulo VALUES (\"$_POST[codigo]\", \"$_POST[descripcion]\", \"$_POST[precio_compra]\", \"$_POST[precio_venta]\", \"$_POST[stock]\")";
        mysql_query($inserta, $conexion);
      }
    }

    
    // Modifica los datos de un artículo.
    
    if($_POST['accion'] == "Modificar") {
      $modifica = "UPDATE articulo SET  descripcion=\"$_POST[descripcion]\", precio_compra=\"$_POST[precio_compra]\", precio_venta=\"$_POST[precio_venta]\", stock=\"$_POST[stock]\" WHERE codigo=\"$_POST[codigo]\"";
      mysql_query($modifica, $conexion);
    }

    
    // Elimina un artículo de la base de datos.
    
    if($_POST['accion'] == "Eliminar") {
      $borra = "DELETE FROM articulo WHERE codigo=\"$_POST[codigo]\"";
      mysql_query($borra, $conexion);
    }

    
    // Entrada de stock. El almacén recibe mercancía.
    
    if($_POST['accion'] == "Entrada") {
      if ($_POST['unidades'] < 0) {
        echo '<script type="text/javascript">alert("Debe introducir un número positivo.");</script>';
      } else {
        $entrada = "UPDATE articulo SET stock=stock+".$_POST['unidades']." WHERE codigo=\"$_POST[codigo]\"";
        mysql_query($entrada, $conexion);
      }
    }

    
    // Salida de stock. Sale mercancía del almacén.
    
    if($_POST['accion'] == "Salida") {
      // Comprueba si hay suficiente stock
      if ($_POST['stock'] < $_POST['unidades']) {
        echo '<script type="text/javascript">alert("Lo siento, no se pueden sacar '.$_POST['unidades'].' unidades del almacén, sólo hay '.$_POST['stock'].' disponibles.\");</script>';
      } else {
        $salida = "UPDATE articulo SET stock=stock-".$_POST['unidades']." WHERE codigo=\"$_POST[codigo]\"";
        mysql_query($salida, $conexion);
      }
    }


    // Determina la página que se muestra
    $listadoArticulos = "SELECT codigo, descripcion, precio_compra, precio_venta, stock FROM articulo";
    $consulta = mysql_query($listadoArticulos, $conexion);
    $numArticulos = mysql_num_rows($consulta);
    $numPaginas = floor(abs($numArticulos - 1) / 5 + 1);

    $pagina = $_POST['pagina'];

    if ($pagina == "Primera") {
      $_SESSION['pagina'] = 1;
    }

    if (($pagina == "Anterior") && ($_SESSION['pagina'] > 1)) {
      $_SESSION['pagina']--;
    }

    if (($pagina == "Siguiente") && ($_SESSION['pagina'] < $numPaginas)) {
      $_SESSION['pagina']++;
    }

    if ($pagina == "Ultima") {
      $_SESSION['pagina'] = $numPaginas;
    }


    // Listado /////////////////////////////////////////////////
    $listadoArticulos = "SELECT codigo, descripcion, precio_compra, precio_venta, stock FROM articulo ORDER BY descripcion LIMIT ".(($_SESSION['pagina'] - 1) * 5).", 5";
    $consulta = mysql_query($listadoArticulos, $conexion);
    // Listado /////////////////////////////////////////////////
    ?>

    <table  class="table table-striped">
      <tr>
        <th>Código</th>
        <th>Descripción</th>
        <th>Precio de<br>compra</th>
        <th>Precio de<br>venta</th>
        <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Margen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Stock</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>

    <?php
    while ($registro = mysql_fetch_array($consulta)) {
      ?>
      <tr>
        <td><?=$registro[codigo]?></td>
        <td><?=$registro[descripcion]?></td>
        <td><?=$registro[precio_compra]?></td>
        <td><?=$registro[precio_venta]?></td>
        <td><?=($registro[precio_venta] - $registro[precio_compra])?></td>
        <td><?=$registro[stock]?></td>
        <td>
          <form action="pagina.php" method="post">
            <input type="hidden" name="ejercicio" value="04_borrar_articulo_confirmacion">
            <input type="hidden" name="codigo" value="<?=$registro[codigo]?>">
            <input type="hidden" name="descripcion" value="<?=$registro[descripcion]?>">
            <input type="hidden" name="precio_compra" value="<?=$registro[precio_compra]?>">
            <input type="hidden" name="precio_venta" value="<?=$registro[precio_venta]?>">
            <input type="hidden" name="stock" value="<?=$registro[stock]?>">
            <button type="submit" class="btn btn-danger">
              <span class="glyphicon glyphicon-trash"></span> Eliminar
            </button>
          </form>
        </td>
        <td>
          <form action="pagina.php" method="post">
            <input type="hidden" name="ejercicio" value="04_modificar_articulo">
            <input type="hidden" name="codigo" value="<?=$registro[codigo]?>">
            <input type="hidden" name="descripcion" value="<?=$registro[descripcion]?>">
            <input type="hidden" name="precio_compra" value="<?=$registro[precio_compra]?>">
            <input type="hidden" name="precio_venta" value="<?=$registro[precio_venta]?>">
            <input type="hidden" name="stock" value="<?=$registro[stock]?>">
            <button type="submit" class="btn btn-warning">
              <span class="glyphicon glyphicon-pencil"></span> Modificar
            </button>
          </form>
        </td>						
        <td>
          <form action="pagina.php" method="post">
            <input type="hidden" name="ejercicio" value="04_entrada_articulo">
            <input type="hidden" name="codigo" value="<?=$registro[codigo]?>">
            <input type="hidden" name="descripcion" value="<?=$registro[descripcion]?>">
            <input type="hidden" name="precio_compra" value="<?=$registro[precio_compra]?>">
            <input type="hidden" name="precio_venta" value="<?=$registro[precio_venta]?>">
            <input type="hidden" name="stock" value="<?=$registro[stock]?>">
            <button type="submit" class="btn btn-primary">
              <span class="glyphicon glyphicon-log-in"></span> Entrada
            </button>
          </form>
        </td>						
        <td>
          <form action="pagina.php" method="post">
            <input type="hidden" name="ejercicio" value="04_salida_articulo">
            <input type="hidden" name="codigo" value="<?=$registro[codigo]?>">
            <input type="hidden" name="descripcion" value="<?=$registro[descripcion]?>">
            <input type="hidden" name="precio_compra" value="<?=$registro[precio_compra]?>">
            <input type="hidden" name="precio_venta" value="<?=$registro[precio_venta]?>">
            <input type="hidden" name="stock" value="<?=$registro[stock]?>">
            <button type="submit" class="btn btn-primary">
              <span class="glyphicon glyphicon-log-out"></span> Salida
            </button>
          </form>
        </td>						
      </tr>
      <?php
    }
    ?>

    <!-- Botones para pasar las páginas -->
    <tr>
      <td>Página <?=$_SESSION['pagina']?> de <?=$numPaginas?></td>
      <td></td>
      <!-- Primera -->
      <td>
        <form action="pagina.php" method="post">
          <input type="hidden" name="ejercicio" value="04">
          <button type="submit" name="pagina" value="Primera">
            <span class="glyphicon glyphicon-step-backward"></span>
            Primera
          </button>
        </form>
      </td>
      <!-- Anterior -->
      <td>
        <form action="pagina.php" method="post">
          <input type="hidden" name="ejercicio" value="04">
          <button type="submit" name="pagina" value="Anterior">
            <span class="glyphicon glyphicon-chevron-left"></span>
            Anterior
          </button>
        </form>
      </td>
      <!-- Siguiente -->
      <td>
        <form action="pagina.php" method="post">
          <input type="hidden" name="ejercicio" value="04">
          <button type="submit" name="pagina" value="Siguiente">
            Siguiente
            <span class="glyphicon glyphicon-chevron-right"></span>
          </button>
        </form>
      </td>
      <!-- Última -->
      <td>
        <form action="pagina.php" method="post">
          <input type="hidden" name="ejercicio" value="04">
          <button type="submit" name="pagina" value="Ultima">
            Última
            <span class="glyphicon glyphicon-step-forward"></span>
          </button>
        </form>
      </td>      

    <!-- Añadir un nuevo articulo -->
    <form action="pagina.php" method="post">
      <input type="hidden" name="ejercicio" value="04">
    <tr>
      <td><b>Código</b></td>
      <td><b>Descripción</b></td>
      <td><b>Precio de compra</b></td>
      <td><b>Precio de venta</b></td>
      <td></td>
      <td><b>Stock</b></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
      <td><input type="text" name="codigo" size="10"></td>
      <td><input type="text" name="descripcion"></td>
      <td><input type="number" min="0" name="precio_compra" step="0.01" style="width: 7em"></td>
      <td><input type="number" min="0" name="precio_venta" step="0.01"style="width: 7em"></td>
      <td><input type="hidden" name="accion" value="Nuevo articulo"></td>
      <td><input type="number" min="0" name="stock" style="width: 7em"></td>
      <td colspan="2">
        <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-ok"></span> Nuevo artículo
        </button>
      </td>
      <td></td>
      <td></td>
    </form>
    </td>
  </tr>
</table>