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
                <h2>Diccionario español - inglés</h2>
                <?php
                    if (isset($_POST['palabra'])) {
                         $palabra = $_POST['palabra'];
                   
                         $diccionario = array (
                            "ordenador" => "computer",
                            "gato" => "cat",      
                            "rojo" => "red",
                            "árbol" => "tree",
                            "pingüino" => "penguin",
                            "sol" => "sun",
                            "agua" => "water",
                            "viento" => "wind",
                            "siesta" => "siesta",
                            "arriba" => "up",
                            "ratón" => "mouse",
                            "estadio" => "arena",
                            "calumnia" => "aspersion",
                            "aguacate" => "avocado",
                            "cuerpo" => "body",
                            "concurso" => "contest",
                            "cena" => "dinner",
                            "salida" => "exit",
                            "lenteja" => "lentil",
                            "cacerola" => "pan",
                            "pastel" => "pie",
                            "membrillo" => "quince"
                            );

                         foreach ($diccionario as $clave => $valor)
                            $palabrasEspanolas[] = $clave;
                         
                         if (in_array($palabra, $palabrasEspanolas))
                                echo "<b>$palabra</b> en inglés es <b>".$diccionario[$palabra]."</b><br><br>";
                            else
                                echo "Lo siento, no conozco esa palabra.<br><br>";
                    }
                     
                    echo '<form action="11.php" method="post">';
                    echo 'Palabra en español :';
                    echo '<input type="text" name ="palabra" autofocus>';
                    echo '<input type="submit" value="OK">';
                    echo '</form>';
                ?>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>