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
