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
        <?php
          $mes = $_POST['mes'];  
          $dia = $_POST['dia'];

          switch($mes) {
            case 1:
              if ($dia < 21) {
                $horoscopo = "capricornio";
              } else {
                $horoscopo = "acuario";
              }
              break;
              
            case 2:
              if ($dia < 20) {
                $horoscopo = "acuario";
              } else {
                $horoscopo = "piscis";
              }
              break;
              
            case 3:
              if ($dia < 21) {
                $horoscopo = "piscis";
              } else {
                $horoscopo = "aries";
              }
              break;
              
            case 4:
              if ($dia < 21) {
                $horoscopo = "aries";
              } else {
                $horoscopo = "tauro";
              }
              break;
              
            case 5:
              if ($dia < 20) {
                $horoscopo = "tauro";
              } else {
                $horoscopo = "géminis";
              }
              break;
              
            case 6:
              if ($dia < 22) {
                $horoscopo = "géminis";
              } else {
                $horoscopo = "cáncer";
              }
              break;
              
            case 7:
              if ($dia < 22) {
                $horoscopo = "cáncer";
              } else {
                $horoscopo = "Leo";
              }
              break;
              
            case 8:
              if ($dia < 24) {
                $horoscopo = "leo";
              } else {
                $horoscopo = "virgo";
              }
              break;
              
            case 9:
              if ($dia < 23) {
                $horoscopo = "virgo";
              } else {
                $horoscopo = "libra";
              }
              break;
              
            case 10:
              if ($dia < 23) {
                $horoscopo = "libra";
              } else {
                $horoscopo = "escorpio";
              }
              break;
              
            case 11:
              if ($dia < 23) {
                $horoscopo = "escorpio";
              } else {
                $horoscopo = "sagitario";
              }
              break;
              
            case 12:
              if ($dia < 21) {
                $horoscopo = "sagitario";
              } else {
                $horoscopo = "capricornio";
              }
              break;
          }

          echo "Su horóscopo es ", $horoscopo;
        ?>
        <br><br>
        <a href="index.php">>> Volver</a>
      </div>
      
      <div id="footer">
        © Luis José Sánchez González
      </div>
      
    </div>
  </body>
</html>
