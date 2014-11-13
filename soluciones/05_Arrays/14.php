<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="default.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
		table, th, td {
			border: 0px;
			text-align: center;
		}
		td.black {
			background-color: black;
		}
		td.white {
			background-color: white;
		}
	</style>
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
                        <br>5. Arrays
		    </h2>
	    </div>

	    <div id="content">
                <h2> Movimiento de un alfil</h2>
                
                <?php
					// Recoge la posición del alfil
					$posicion = $_POST['posicion'];
					$x = ord(substr($posicion, 0, 1)) - ord('a');
					$y = 8 - substr($posicion, 1, 1);
					
					// Pinta el tablero de ajedrez
					$color = "white"; // color de la primera casilla
					echo "<table><td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td>";
					for ($fila = 0; $fila < 8; $fila++) {
						echo "<tr><td style=\"text-align: right\">".(8 - $fila)."</td>";
						for ($columna = 0; $columna < 8; $columna++) {
							echo "<td class=\"$color\">";
							
							// Comprueba si el alfil está en la posición actual
							if (($x == $columna) && ($y == $fila))
								echo "<img src=\"alfil.png\">";
							// Comprueba si es una posición a la que puede llegar el alfil
							else if (abs((abs($x) - abs($columna))) == abs((abs($y) - abs($fila))))
								echo "<img src=\"alfilsemitransparente.png\">";
							else
								echo "<img src=\"vacio.png\">";
							echo "</td>";
							
							// Alterna el color de la casilla
							if ($color == "white")
									$color = "black";
								else
									$color = "white";
							echo "</td>";
						}
						if ($color == "white")
									$color = "black";
								else
									$color = "white";
						echo "<td style=\"text-align: left\">".(8 - $fila)."</td></tr>";
					}
					echo "<td></td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td><td>g</td><td>h</td></table>";

					echo 'Introduzca las coordenadas del alfil (p. ej. e4)';
					echo '<form action="14.php" method="post">';
					echo '<input type="text" name="posicion"><br>';
					echo '<input type="submit" value="Aceptar">';
					echo '</form>';
                ?>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>