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
			
			

			<h3>Tienda on-line <b><i><u>La Estilográfica</u></i></b></h3>
			<table style="border: 2px; margin: 40px;"><tr><td>
			<h3>Productos</h3><hr>
			<?php // Tienda ///////////////////////////////////////////////////////
			
				$producto = array ( 
					"peli1000" => array( "nombre" => "Pelikan Souvëran M-1000", "precio" => 545, "imagen" => "pelikan.jpg",
										 "detalle" => "Plumín de oro 18K.  Émbolo de bronce. Fabricación alemana. Excelentes acabados."),
					"parkduo" => array( "nombre" => "Parker Duofold International", "precio" => 406, "imagen" => "parkerduo.jpg",
										"detalle" => "Plumín de oro 18K. Fabricada en Reino Unido. Cuerpo en resina de alta resistencia."),
					"viscvan" => array( "nombre" => "Visconti Van Gogh", "precio" => 180, "imagen" => "visconti.jpg",
										"detalle" => "Diseño y acabados de lujo. Cuerpo fabricado en Italia. Plumín alemán."),
					"waterexp" => array( "nombre" => "Waterman Expert", "precio" => 103.55, "imagen" => "waterman.jpg",
										 "detalle" => "Excelente pluma de uso diario. Fabricada en Francia. Plumín de acero.")
				);

				$_SESSION['producto'] = $producto;
				
				foreach ($producto as $codigo => $elemento) {
					echo "<img src=\"$elemento[imagen]\" width=\"360\" border=\"1\"><br>";
					echo $elemento[nombre]."<br>Precio: ".$elemento[precio]." € ";
					echo "<form action=\"detalle.php\" method=\"post\">";
					echo "<input type=\"hidden\" name=\"codigo\" value=\"$codigo\">";
					echo "<input type=\"hidden\" name=\"accion\" value=\"detalle\">";
					echo "<input type=\"submit\" value=\"Detalle\">";
					echo "</form>";	
					echo "<form action=\"06.php\" method=\"post\">";
					echo "<input type=\"hidden\" name=\"codigo\" value=\"$codigo\">";
					echo "<input type=\"hidden\" name=\"accion\" value=\"detalle\">";
					echo "<input type=\"hidden\" name=\"accion\" value=\"comprar\">";
					echo "<input type=\"submit\" value=\"Comprar\">";
					echo "</form><br><br>";			
				}					
			?>

			</td><td>			
			<h3>Carrito</h3><hr>
			
			<?php // Carrito ///////////////////////////////////////////////////////
				$accion = $_POST['accion'];
				$codigo = $_POST['codigo'];
				
				// Inicializa el carrito la primera vez
				if (!isset($_SESSION[carrito]))
					$_SESSION[carrito] = array ("peli1000" => 0, "parkduo" => 0, "viscvan" => 0, "waterexp" => 0);
				
				if ($accion == "comprar")  $_SESSION[carrito][$codigo]++;
				if ($accion == "eliminar")  $_SESSION[carrito][$codigo] = 0;
				
				// Muestra el contenido del carrito
				$total = 0;
				foreach ($producto as $cod => $elemento)
					if ($_SESSION[carrito][$cod] > 0) {
						$total = $total + ($_SESSION[carrito][$cod] * $elemento[precio]);
						echo "<img src=\"$elemento[imagen]\" width=\"200\" border=\"1\"><br>";
						echo $elemento[nombre]."<br>Precio: ".$elemento[precio]." €<br>";
						echo "Unidades: ".$_SESSION[carrito][$cod];
						echo "<form action=\"06.php\" method=\"post\">";
						echo "<input type=\"hidden\" name=\"codigo\" value=\"$cod\">";
						echo "<input type=\"hidden\" name=\"accion\" value=\"eliminar\">";
						echo "<input type=\"submit\" value=\"Eliminar\">";
						echo "</form><br><br>";						
					}
				echo "<b>Total: $total €</b>";
			?>
			</td></tr></table>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>