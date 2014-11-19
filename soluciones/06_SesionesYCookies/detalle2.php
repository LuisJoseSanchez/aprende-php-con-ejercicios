<?php session_start(); ?>
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
			
			<h3>Detalle del producto</h3><hr>
			<?php
				$codigo = $_POST['codigo'];
				$producto = $_SESSION['producto'];
				$elemento = $producto[$codigo];
				
				echo "<img src=\"$elemento[imagen]\" border=\"1\"><br>";
				echo $elemento[nombre]."<br>Precio: ".$elemento[precio]." €<br>";
				echo "Unidades de este producto en el carrito: ".$_SESSION[carrito][$codigo];
				echo "<br>".$elemento[detalle];
				echo "<form action=\"08.php\" method=\"post\">";
				echo "<input type=\"hidden\" name=\"codigo\" value=\"$codigo\">";
				echo "<input type=\"hidden\" name=\"accion\" value=\"comprar\">";
				echo "<input type=\"submit\" value=\"Comprar\">";
				echo "</form>";
				echo "<form action=\"08.php\" method=\"post\">";
				echo "<input type=\"hidden\" name=\"codigo\" value=\"$codigo\">";
				echo "<input type=\"hidden\" name=\"accion\" value=\"eliminar\">";
				echo "<input type=\"submit\" value=\"Eliminar del carrito\">";
				echo "</form><br><br>";	
			?>
			<a href="08.php">Volver a la tienda</a>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>