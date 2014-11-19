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
                        <br>7. Acceso a Bases de datos
		    </h2>
	    </div>

	    <div id="content">	
			<?php
				$codigo = $_POST['codigo'];
				$descripcion = $_POST['descripcion'];
				$precio_compra = $_POST['precio_compra'];
				$precio_venta = $_POST['precio_venta'];
				$stock = $_POST['stock'];
				
				echo "Se borrará el siguiente artículo de la base de datos:<hr>";
				
				echo "Código: $codigo<br>";
				echo "Descripción: $descripcion<br>";
				echo "Precio de compra: $precio_compra<br>";
				echo "Precio de venta: $precio_venta<br>";
				echo "Stock: $stock<br>";
				
				echo "<hr>¿Está seguro?";
				
				echo "<table><tr><td>";
				echo "<form action=\"05.php\" method=\"post\">";
				echo "<input type=\"hidden\" name=\"codigo\" value=\"$codigo\">";
				echo "<input type=\"submit\" name=\"accion\" value=\"Eliminar\">";
				echo "</form></td><td>";
				echo "<form action=\"05.php\" method=\"link\">";
				echo "<input type=\"submit\" value=\"Cancelar\">";
				echo "</form>";
				echo "</td></tr></table>";
			?>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>