<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="default.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
	<div id="container">
	    <div id="header">
		    <h1>
			    APRENDE PHP CON EJERCICIOS
		    </h1>
                    <h2>
                            SOLUCIONES A LOS EJERCICIOS
                    </h2>
		    <h2>
                        <br>6. Sesiones y Cookies
		    </h2>
	    </div>

	    <div id="content">	
			<h3>Administración de productos</h3><hr>
			<?php
				if($_POST['accion'] == "alta")
					$_SESSION['producto'][$_POST['codigo']] = array("nombre" => $_POST['nombre'],
																		 "precio" => $_POST['precio'],
																		 "imagen" => $_POST['imagen'],
																		 "detalle" => $_POST['detalle']);
				
				if($_POST['accion'] == "modificar") {
					$_SESSION['producto'][$_POST['codigo']]['nombre'] = $_POST['nombre'];
					$_SESSION['producto'][$_POST['codigo']]['precio'] = $_POST['precio'];
					$_SESSION['producto'][$_POST['codigo']]['imagen'] = $_POST['imagen'];
					$_SESSION['producto'][$_POST['codigo']]['detalle'] = $_POST['detalle'];
				}

				if($_POST['accion'] == "eliminar")
					unset($_SESSION['producto'][$_POST['codigo']]);
				
				
				$producto = $_SESSION['producto'];
				
				echo "<table>";
				foreach ($producto as $codigo => $elemento) {
					echo "<tr><td>";
					echo "<img src=\"$elemento[imagen]\" width=\"360\" border=\"1\"><br>";
					echo $elemento[nombre]."<br>Precio: ".$elemento[precio]." € ";
					echo "<br>".$elemento[detalle];
					echo "</td><td><form action=\"admin_productos.php\" method=\"post\">";
					echo "<input type=\"hidden\" name=\"codigo\" value=\"$codigo\">";
					echo "<input type=\"hidden\" name=\"accion\" value=\"eliminar\">";
					echo "<input type=\"submit\" value=\"Eliminar\">";
					echo "</form>";	
					echo "</td><td><form action=\"modificacion.php\" method=\"post\">";
					echo "<input type=\"hidden\" name=\"codigo\" value=\"$codigo\">";
					echo "<input type=\"submit\" value=\"Modificar\">";
					echo "</form><br><br>";
					echo "</td></tr>";
				}
				echo "</table>";
			?>

			<hr><table><tr>
			<td>
			<form action="alta.php" method="link">
				<input type="submit" value="Añadir nuevo&#x00A;producto">
			</form>
			</td>
			<td>
			<form action="08.php" method="post">
				<input type="hidden" name="accion" value="borrarCookies">
				<input type="submit" value="Borrar todo e&#x00A;inicializar a productos&#x00A;por defecto">
			</form>
			</td>
			<td>
			<form action="08.php" method="post">
				<input type="hidden" name="accion" value="actualizarCookies">
				<input type="submit" value="Guardar cambios&#x00A;y regresar&#x00A;a la tienda">
			</form>
			</td>
			
			</tr></table>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>