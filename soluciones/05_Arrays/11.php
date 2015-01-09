<h2>Diccionario español - inglés</h2>
<?php
  if (isset($_GET['palabra'])) {
    $palabra = $_GET['palabra'];

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

    foreach ($diccionario as $clave => $valor) {
      $palabrasEspanolas[] = $clave;
    }
    
    if (in_array($palabra, $palabrasEspanolas)) {
      echo "<b>$palabra</b> en inglés es <b>".$diccionario[$palabra]."</b><br><br>";
    } else {
      echo "Lo siento, no conozco esa palabra.<br><br>";
    }
  }
?>
<form action="pagina.php" method="get">
  <input type="hidden" name="ejercicio" value="11">
  Palabra en español : <input type="text" name ="palabra" autofocus="" required="">
  <input type="submit" value="OK">
</form>
