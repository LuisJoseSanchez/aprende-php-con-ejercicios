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
                        <br>5. Arrays
		    </h2>
	    </div>

	    <div id="content">
                <?php
                    if (!isset($_GET['numeroTexto'])) {
                        // Genera el array aleatorio
                        for ($i = 0; $i < 100; $i++) {
                            $numero[$i] = rand(0, 20);
                            echo $numero[$i]." ";
                        }
                        
                        $numeroTexto = implode(" ", $numero);
                        
                        echo '<form action="04.php" method="get">';
                        echo 'Valor a sustituir: ';
                        echo '<input type="text" name ="viejo">';
                        echo 'Valor nuevo: ';
                        echo '<input type="text" name ="nuevo">';
                        echo '<input type="hidden" name="numeroTexto" value="'.$numeroTexto.'">';
                        echo '<input type="submit" value="OK">';
                        echo '</form>';
                     } else {
                        $numeroTexto = $_GET['numeroTexto'];
                        $viejo = $_GET['viejo'];
                        $nuevo = $_GET['nuevo'];
                        
                        $numero = explode(" ", $numeroTexto);
                        
                        foreach ($numero as $n) {
                            if ($n == $viejo) 
                                    echo "<span style=\"color: green; font-weight: bold;\">$nuevo</span> ";
                                else
                                    echo  "$n ";
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
