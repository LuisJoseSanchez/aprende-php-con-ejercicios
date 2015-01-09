<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
    <title>Soluciones a los ejercicios - 5. Arrays</title>
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
        <ol>
          <li>
            Define tres arrays de 20 números enteros cada una, con nombres "numero",cuadrado"
            y "cubo". Carga el array "numero" con valores aleatorios entre 0 y 100. En el array
            "cuadrado" se deben almacenar los cuadrados de los valores que hay en el array "numero".
            En el array "cubo" se deben almacenar los cubos de los valores que hay en "numero".
            A continuación, muestra el contenido de los tres arrays dispuestos en tres columnas.
            <br /><a href="pagina.php?ejercicio=01">&gt;&gt; Solución</a>
          </li>

          <li>
            Escribe un programa que pida 10 números por teclado y que luego muestre los números
            introducidos junto con las palabras "máximo" y "mínimo" al lado del máximo y del
            mínimo respectivamente.
            <br /><a href="pagina.php?ejercicio=02">&gt;&gt; Solución</a>
          </li>

          <li>
            Escribe un programa que lea 15 números por teclado y que los
            almacene en un array. Rota los elementos de ese array, es decir,
            el elemento de la posición 0 debe pasar a la posición 1, el de
            la 1 a la 2, etc. El número que se encuentra en la última posición
            debe pasar a la posición 0. Finalmente, muestra el contenido del
            array.
            <br /><a href="pagina.php?ejercicio=03">&gt;&gt; Solución</a>
          </li>

          <li>
            Escribe un programa que genere 100 números aleatorios del 0 al 20
            y que los muestre por pantalla separados por espacios. El programa
            pedirá entonces por teclado dos valores y a continuación cambiará
            todas las ocurrencias del primer valor por el segundo en la lista
            generada anteriormente. Los números que se han cambiado deben
            aparecer resaltados de un color diferente.
            <br /><a href="pagina.php?ejercicio=04">&gt;&gt; Solución</a>
          </li>

          <li>
            Realiza un programa que pida la temperatura media que ha hecho
            en cada mes de un determinado año y que muestre a continuación
            un diagrama de barras horizontales con esos datos. Las barras
            del diagrama se pueden dibujar a base de la concatenación de
            una imagen.
            <br /><a href="pagina.php?ejercicio=05">&gt;&gt; Solución</a>
          </li>

          <li>
            Realiza un programa que pida 8 números enteros y que luego muestre
            esos números de colores, los pares de un color y los impares de otro.
            <br /><a href="pagina.php?ejercicio=06">&gt;&gt; Solución</a>
          </li>

          <li>
            Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100
            y que los almacene en un array. El programa debe ser capaz de pasar todos
            los números pares a las primeras posiciones del array (del 0 en adelante)
            y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
            si es necesario.
            <br /><a href="pagina.php?ejercicio=07">&gt;&gt; Solución</a>
          </li>

          <li>
            Realiza un programa que pida 10 números por teclado y que los
            almacene en un array. A continuación se mostrará el contenido
            de ese array junto al índice (0 - 9) utilizando para ello una tabla.
            Seguidamente el programa pasará los primos a las primeras posiciones,
            desplazando el resto de números (los que no son primos) de tal forma
            que no se pierda ninguno. Al final se debe mostrar el array resultante.<br><br>
            Por ejemplo:<br><br>
            Vector inicial:
            <table>
                <tr><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
                <tr><td>20</td><td>5</td><td>7</td><td>4</td><td>32</td><td>9</td><td>2</td><td>14</td><td>11</td><td>6</td></tr>
            </table>
            Vector final:
            <table>
                <tr><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
                <tr><td>5</td><td>7</td><td>2</td><td>11</td><td>20</td><td>4</td><td>32</td><td>9</td><td>14</td><td>6</td></tr>
            </table>

            <br /><a href="pagina.php?ejercicio=08">&gt;&gt; Solución</a>
          </li>

          <li>
            Realiza un programa que pida 10 números por teclado y que los
            almacene en un array. A continuación se mostrará el contenido
            de ese array junto al índice (0 - 9). Seguidamente el programa
            pedirá dos posiciones a las que llamaremos  inicial y final.
            Se debe comprobar que inicial es menor que final y que ambos
            números están entre 0 y 9. El programa deberá colocar el número
            de la posición inicial en la posición final, rotando el resto
            de números para que no se pierda ninguno. Al final se debe
            mostrar el array resultante.<br><br>
            Por ejemplo:<br><br>
            Vector inicial:
            <table>
                <tr><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
                <tr><td>20</td><td>5</td><td>7</td><td>4</td><td>32</td><td>9</td><td>2</td><td>14</td><td>11</td><td>6</td></tr>
            </table>
            <br>Posición inicial: 3<br>
            <br>Posición final: 7<br><br>
            Vector final:
            <table>
                <tr><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td><td>9</td></tr>
                <tr><td>6</td><td>20</td><td>5</td><td>7</td><td>32</td><td>9</td><td>2</td><td>4</td><td>14</td><td>11</td></tr>
            </table>
            <br /><a href="pagina.php?ejercicio=09">&gt;&gt; Solución</a>
          </li>

          <li>
            Realiza un programa que escoja al azar 10 cartas de la baraja española
            y que diga cuántos puntos suman según el juego de la brisca. Emplea un
            array asociativa para obtener los puntos a partir del nombre de la figura
            de la carta. Asegúrate de que no se repite ninguna carta, igual que si
            las hubieras cogido de una baraja de verdad.
          <br /><a href="pagina.php?ejercicio=10">&gt;&gt; Solución</a>
          </li>

          <li>
            Crea un mini-diccionario español-inglés que contenga, al menos, 20
            palabras (con su traducción). Utiliza un array asociativa para
            almacenar las parejas de palabras. El programa pedirá una palabra
            en español y dará la correspondiente traducción en inglés.
            <br /><a href="pagina.php?ejercicio=11">&gt;&gt; Solución</a>
          </li>

          <li>
            Realiza un programa que escoja al azar 5 palabras en español
            del mini-diccionario del ejercicio anterior. El programa pedirá
            que el usuario teclee la traducción al inglés de cada una de las
            palabras y comprobará si son correctas. Al final, el programa
            deberá mostrar cuántas respuestas son válidas y cuántas erróneas.
            <br /><a href="pagina.php?ejercicio=12">&gt;&gt; Solución</a>
          </li>
  
          <li>
            Rellena un array bidimensional de 6 filas por 9 columnas con números
            enteros positivos comprendidos entre 100 y 999 (ambos incluidos).
            Todos los números deben ser distintos, es decir, no se puede repetir
            ninguno. Muestra a continuación por pantalla el contenido del array
            de tal forma que se cumplan los siguientes requisitos:<br><br>
            &nbsp;&nbsp;a) Los números de las dos diagonales donde está el mínimo deben
                     aparecer en color verde.<br>
            &nbsp;&nbsp;b) El mínimo debe aparecer en color azul.<br>
            &nbsp;&nbsp;c) El resto de números debe aparecer en color negro.<br>
            <br /><a href="pagina.php?ejercicio=13">&gt;&gt; Solución</a>
          </li>

          <li>
            Escribe un programa que, dada una posición en un tablero de ajedrez,
            nos diga a qué casillas podría saltar un alfil que se encuentra en
            esa posición. Indícalo de forma gráfica sobre el tablero con un color
            diferente para estas casillas donde puede saltar la figura. El alfil
            se mueve siempre en diagonal. El tablero cuenta con 64 casillas. Las
            columnas se indican con las letras de la "a" a la "h" y las filas se
            indican del 1 al 8.
            <br /><a href="pagina.php?ejercicio=14">&gt;&gt; Solución</a>
          </li>                               
        </ol>
        
      </div>
      <div id="footer">
        © Luis José Sánchez González
      </div>
    </div>
  </body>
</html>
