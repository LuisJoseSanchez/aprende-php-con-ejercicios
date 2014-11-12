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
          $dia = $_POST['dia'];

          switch($dia) {
            case "lunes":
              echo "Desarrollo en Entorno Servidor";
              break;
            
            case "martes":
              
            case "miércoles":
              echo "Libre Configuración";
              break;
            
            case "jueves":
              echo "Despliegue de Aplicaciones";
              break;
            
            case "viernes":
              echo "Diseño de Interfaces Web";
              break;
            
            case "sábado":
              
            case "domingo":
              echo "¡Ese día no hay clase!";
              break;
            
            default:
              echo "El día introducido no es correcto.";
          }
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
