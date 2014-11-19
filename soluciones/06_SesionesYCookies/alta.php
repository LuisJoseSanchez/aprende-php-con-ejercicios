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
			<h3>Nuevo producto</h3><hr>
			<form action="admin_productos.php" method="post">
				Código: <input type="text" name="codigo"><br>
				Nombre: <input type="text" name="nombre"><br>
				Descripción: <input type="text" name="detalle" size="60"><br>
				Precio: <input type="text" name="precio"><br>
				Imagen: <input type="text" name="imagen"><br>
				<input type="hidden" name="accion" value="alta">
				<input type="submit" value="Aceptar">
			</form><br><br>

	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>