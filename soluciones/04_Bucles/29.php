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
		    $numeroGrande = $_POST['numeroGrande'];
		    $numeroPequeno = $_POST['numeroPequeno'];
		    
                    if (!isset($numeroGrande)){
			echo "<form action=\"29.php\" method=\"post\">";
			echo "Introduzca un número entero positivo (relativamente grande): ";
                        echo "<input type=\"text\" name=\"numeroGrande\" size=\"8\"><br>";
			echo "Introduzca otro número (relativamente pequeño): ";
                        echo "<input type=\"text\" name=\"numeroPequeno\" size=\"4\"><br>";
                        echo "<input type=\"submit\" value=\"Aceptar\">";
                        echo "</form>";
                    } else {
			$cuenta = 0;
			$suma = 0;
			
			echo "Los números enteros positivos menores que $numeroGrande";
			echo " que no son divisibles entre $numeroPequeno son los siguientes: <br>";

			for ($i = 1; $i < $numeroGrande; $i++)
				if (($i % $numeroPequeno) != 0)
					echo "$i ";
		    }
		?>

	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>