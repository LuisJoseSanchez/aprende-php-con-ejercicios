<?php
  session_start();
    // Si se envían datos desde el formulario de actores, se actualizan las cookies
/*
    if ($_POST['accion'] == "actualizarCookies")
        setcookie("producto", urlencode(serialize($_SESSION['producto'])), time() + 365*24*3600);
    else if (isset($_COOKIE['producto']))
    $_SESSION['producto'] = unserialize(urldecode($_COOKIE['producto']));
*/
  // Actualizar las cookies
  if ($_POST['accion'] == "actualizarCookies")
    foreach ($_SESSION['diccionario'] as $espanol => $ingles)
      setcookie($espanol, $ingles, time() + 365*24*3600);

  // Carga las palabras almacenadas en las cookies
  foreach ($_COOKIE as $espanol => $ingles)
    if ($espanol != "PHPSESSID")
      $_SESSION['diccionario'][$espanol] = $ingles;
    
    // Borrado de cookies y variables
    if ($_POST['accion'] == "borrarCookies") {
    foreach ($_SESSION['diccionario'] as $espanol)
      setcookie($espanol, NULL, -1);
    
    unset($_SESSION['diccionario']);
    }
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
                        <br>5. Arrays
        </h2>
      </div>

      <div id="content">
                <h2>Prueba tu vocabulario en inglés</h2>
                
                <?php
        
          if (!isset($_SESSION['diccionario']))
            $_SESSION['diccionario'] = array (
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
          
                    $diccionario = $_SESSION['diccionario'];
          
                    if (!isset($_POST['espanol'])) {
            echo "Por favor, introduzca la traducción al inglés de las siguientes palabras.<br>";
            
            // Extrae las palabras españolas
            foreach ($diccionario as $clave => $valor)
                $palabrasEspanolas[] = $clave;
            
            // Elige 5 palabras en español sin que se repita ninguna
            $contadorPalabras = 0;
            $espanol = array();
            
            do {
              $palabra = $palabrasEspanolas[rand(0, count($palabrasEspanolas) - 1)];
              
              if (!in_array($palabra, $espanol)) {
                $espanol[] = $palabra;
                $contadorPalabras++;
              }
            } while ($contadorPalabras < 5);

                        echo '<form action="07.php" method="post">';
                        for ($i = 0; $i < 5; $i++) {
              echo $espanol[$i]." ";
              echo '<input type="hidden" name="espanol['.$i.']" value="'.$espanol[$i].'">';
              echo '<input type="text" name="ingles['.$i.']" ><br>';
            }
                        echo '<input type="submit" value="Aceptar">';
                        echo '</form>';
                    } else {
                        $espanol = $_POST['espanol'];
            $ingles = $_POST['ingles'];
                   
            for ($i = 0; $i < 5; $i++) {
              echo $espanol[$i].": ".$ingles[$i];
              if ($diccionario[$espanol[$i]] == $ingles[$i])
                  echo " - correcto<br>";
                else
                  echo " - incorrecto, la respuesta correcta es ".$diccionario[$espanol[$i]]."<br>";
            }
                    }
                ?>
        <hr>
        <form action="07.php" method="link">
          <input type="submit" value="Jugar otra vez">
        </form>
        <hr>
        <form action="admin_palabras.php" method="link">
          <input type="submit" value="Administrar los pares de palabras">
        </form>
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
  </div>
    </body>
</html>
