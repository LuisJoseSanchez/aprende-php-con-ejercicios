<?php
  // Actualizar las cookies
  if ($_POST['accion'] == "actualizarCookies") {
    foreach ($_SESSION['diccionario'] as $espanol => $ingles) {
      setcookie($espanol, $ingles, time() + 365 * 24 * 3600);
    }
  }

  // Carga las palabras almacenadas en las cookies
  foreach ($_COOKIE as $espanol => $ingles) {
    // Con el siguiente if se descarta el PHPSESSID que es el identificador de
    // sesión, que se guarda en forma de cookie, y la cookie "color" de un
    // ejercicio anterior.
    // Habría que añadir en el descarte otras cookies en caso de que las hubiera.
    if (($espanol != "PHPSESSID") && ($espanol != "color")) {
      $_SESSION['diccionario'][$espanol] = $ingles;
    }
  }
  
  // Borrado de cookies y variables
  if ($_POST['accion'] == "borrarCookies") {
    foreach ($_SESSION['diccionario'] as $espanol) {
      setcookie($espanol, NULL, -1);
    }
    unset($_SESSION['diccionario']);
  }
        
  if (!isset($_SESSION['diccionario'])) {
    $_SESSION['diccionario'] = array (
      "ordenador" => "computer",
      "gato" => "cat",      
      "rojo" => "red",
      "árbol" => "tree",
      "pingüino" => "penguin",
      "sol" => "sun",
      "agua" => "water",
      "viento" => "wind",
      "siesta" => "nap",
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
  }
          
  $diccionario = $_SESSION['diccionario'];
  
  if (!isset($_POST['espanol'])) {
    echo "Por favor, introduzca la traducción al inglés de las siguientes palabras.<br>";

    // Extrae las palabras españolas
    foreach ($diccionario as $clave => $valor) {
      $palabrasEspanolas[] = $clave;
    }

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
    
    echo '<form action="pagina.php" method="post">';
    echo '<input type="hidden" name="ejercicio" value="08">';
    for ($i = 0; $i < 5; $i++) {
      echo $espanol[$i]." ";
      echo '<input type="hidden" name="espanol['.$i.']" value="'.$espanol[$i].'">';
      echo '<input type="text" name="ingles['.$i.']" ><br>';
    }
    echo '<input type="submit" value="Aceptar">';
    echo '</form>';
  }  else {
    $espanol = $_POST['espanol'];
    $ingles = $_POST['ingles'];

    for ($i = 0; $i < 5; $i++) {
      echo $espanol[$i].": ".$ingles[$i];
      if ($diccionario[$espanol[$i]] == $ingles[$i]) {
        echo " - correcto<br>";
      } else {
        echo " - incorrecto, la respuesta correcta es ".$diccionario[$espanol[$i]]."<br>";
      }
    }
  }
  ?>
  <hr>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="08">
    <input type="submit" value="Jugar otra vez">
  </form>
  <hr>
  <form action="pagina.php" method="post">
    <input type="hidden" name="ejercicio" value="08_admin_palabras">
    <input type="submit" value="Administrar los pares de palabras">
  </form>