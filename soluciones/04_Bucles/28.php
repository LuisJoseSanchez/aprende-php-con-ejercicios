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
		    $n = $_POST['n'];
		    
                    if (!isset($n)){
			echo "<h2>Factorial</h2>";
			echo "Introduzca un número entero positivo: ";
			echo "<form action=\"28.php\" method=\"post\">";
                        echo "<input type=\"text\" name=\"n\" size=\"8\"><br>";
                        echo "<input type=\"submit\" value=\"Aceptar\">";
                        echo "</form>";
                    } else {
			$factorial = $n;
		
			if ($n == 0)
				echo "El factorial del 0 es 1.";
			else {
				for ($i = 1; $i < $n; $i++)
					$factorial *= $i;
					
				echo "El factorial del $n es $factorial.";
			}
		    }
		?>

	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>