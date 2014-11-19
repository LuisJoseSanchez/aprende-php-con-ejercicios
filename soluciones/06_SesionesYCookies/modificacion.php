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
			<h3>Modificación</h3><hr>
			<?php
				$codigo = $_POST['codigo'];
				$producto = $_SESSION['producto'];
				$elemento = $producto[$codigo];
				
				echo "<form action=\"admin_productos.php\" method=\"post\">";
				echo "Código: <input type=\"text\" name=\"codigo\" value=\"$codigo\" readonly=\"readonly\"><br>";
				echo "Nombre: <input type=\"text\" name=\"nombre\" value=\"".$elemento['nombre']."\"><br>";
				echo "Descripción: <input type=\"text\" name=\"detalle\" value=\"".$elemento['detalle']."\" size=\"60\"><br>";
				echo "Precio: <input type=\"text\" name=\"precio\" value=\"".$elemento['precio']."\"><br>";
				echo "Imagen: <input type=\"text\" name=\"imagen\" value=\"".$elemento['imagen']."\"><br>";
				echo "<input type=\"hidden\" name=\"accion\" value=\"modificar\">";
				echo "<input type=\"submit\" value=\"Aceptar\">";
				echo "</form><br><br>";
			?>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>