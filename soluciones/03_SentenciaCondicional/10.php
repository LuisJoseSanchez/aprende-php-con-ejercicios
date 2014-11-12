<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
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
          <br>3. Sentencia condicional
        </h2>
      </div>

      <div id="content">
        Este programa le dirá cuál es su horóscopo a partir de su fecha de nacimiento.<br>
        <form action="10result.php" method="post">
          Introduzca el número del mes en que nació (1-12):<br>
          <input type="number" min="1" max="12" name="mes" autofocus><br>
          Introduzca el día:<br>
          <input type="number" min="1" max="31" name="dia"><br>
          <input type="submit" value="Aceptar">
        </form>
      </div>
      
      <div id="footer">
        © Luis José Sánchez González
      </div>
      
    </div>
  </body>
</html>
