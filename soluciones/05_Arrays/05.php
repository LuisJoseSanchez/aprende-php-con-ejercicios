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
                
