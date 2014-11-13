<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="default.css" rel="stylesheet" type="text/css" />
	 <style type="text/css">table, th, td {border: 0px} </style>
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
                    if (!isset($_POST['temperatura'])) {
                         $mes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
			 echo 'Por favor, introduzca la temperatura media de cada mes.<br>';
			 echo '<form action='.$_SERVER['SCRIPT_NAME'].' method="post">';
			 for ($i = 0; $i < 12; $i++)
			    echo "$mes[$i]: <input type=\"text\" name =\"temperatura[$mes[$i]]\" size=\"4\"><br>"; 
                         echo '<input type="submit" value="OK">';
                         echo '</form>';
                     } else {
                         $temperatura = $_POST['temperatura'];
			 echo "<table>";
			 foreach($temperatura as $mes => $temperaturaMes) {
			     echo "<tr><td>$mes </td><td>";
			     // Pinta la barra
			     for ($i = 0; $i < $temperaturaMes; $i++)
				echo "<img src=\"bggreen.png\">";
			     echo " $temperaturaMes"."ºC<br></td></tr>";
			 }
			 echo "</table>";
                     }
                ?>
	    </div>
	    <div id="footer">
		    © Luis José Sánchez González
	    </div>
	</div>
    </body>
</html>
