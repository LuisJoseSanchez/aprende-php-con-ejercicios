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
                        <br>4. Bucles
		    </h2>
	    </div>

	    <div id="content">
                <?php
		    $alturaIntroducida = $_POST['alturaIntroducida'];
		    $figura = $_POST['figura'];
		    
                    if (!isset($alturaIntroducida)){
			echo "<h2>Pirámide hueca</h2>";
			echo "<form action=\"20.php\" method=\"post\">";
                        echo "Altura: <input type=\"text\" name=\"alturaIntroducida\" size=\"8\"><br>";
			echo "Figura base: ";
			echo "<select name=\"figura\">";
			echo "	<option value=\"bolita\">Bolita</option>";
			echo "	<option value=\"ladrillo\">Ladrillo</option>";
			echo "	<option value=\"pinguino\">Pingüino</option>";
			echo "	<option value=\"pina\">Piña</option>";
			echo "	<option value=\"sol\">Sol</option>";
			echo "</select>";
                        echo "<input type=\"submit\" value=\"Aceptar\">";
                        echo "</form>";
                    } else {
			$altura = 1;
			$i = 0;
			$espaciosPorDelante = $alturaIntroducida - 1;
			$espaciosInternos = 0;

			while ($altura < $alturaIntroducida) {

				// inserta espacios por delante
				for ($i = 1; $i <= $espaciosPorDelante; $i++)
					echo "<img src=\"blanco.png\">";

				// pinta la línea
				echo "<img src=\"$figura.png\">";
				for ($i = 1; $i < $espaciosInternos; $i++)
					echo "<img src=\"blanco.png\">";
				
				if ($altura > 1)
				    echo "<img src=\"$figura.png\">";

				echo "<br>";

				$altura++;
				$espaciosPorDelante--;
				$espaciosInternos+=2;
			} // while
			
			// base de la pirámide
			for ($i = 1; $i < $altura * 2; $i++)
			    echo "<img src=\"$figura.png\">";
		    }
		?>

	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>
