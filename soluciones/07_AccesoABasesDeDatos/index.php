<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capítulo 7 - Acceso a Bases de Datos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Pagina principal</a></li>
            <li><a href="https://github.com/LuisJoseSanchez/aprende-php-con-ejercicios">GitHub</a></li>
            <li><a href="#"></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div class="container">
      <br>
      <div class="jumbotron">
        <h3 class="text-center">APRENDE PHP CON EJERCICIOS</h3>
        <h4 class="text-center">SOLUCIONES A LOS EJERCICIOS</h4>
        <h4 class="text-center">7. Acceso a Bases de Datos</h4>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>
          <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
          Ejercicio 1
          </h4>
        </div>
        <div class="panel-body">
          Crea una aplicación web que permita hacer listado, alta, baja y modificación
          sobre la tabla cliente de la base de datos banco.
          <ul>
            <li>
              Para realizar el listado bastará un SELECT, tal y como se ha visto
              en los ejemplos.
            </li>
            <li>
              El alta se realizará mediante un formulario donde se especificarán todos los campos del nuevo
              registro. Luego esos datos se enviarán a una página que ejecutará INSERT.
            </li>
            <li>
              Para realizar una baja, el usuario hará clic en el botón <b>Eliminar</b>
              que está situado en la fila del cliente que quiere borrar. Se deberá
              enviar el DNI del cliente y ejecutar DELETE para borrar el registro
              cuyo DNI coincida con el introducido.
            </li>
            <li>
              La modificación se realiza mediante UPDATE. el usuario hará clic
              en el botón <b>Modificar</b> que está situado en la fila del cliente
              del que quiere cambiar alguna información.
            </li>
          </ul>
        </div>
        <div class="panel-footer">
          <a class="btn btn-default" href="pagina.php?ejercicio=01" role="button">Solución</a>
        </div>
      </div>
            

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>
          <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
          Ejercicio 2
          </h4>
        </div>
        <div class="panel-body">
            Modifica el programa anterior añadiendo las siguientes mejoras:
            <ul>
              <li>
                El listado debe aparecer paginado en caso de que haya muchos clientes.
              </li>
              <li>
                Al hacer un alta, se debe comprobar que no exista ningún cliente
                con el DNI introducido en el formulario.
              </li>
              <li>
                La opción de borrado debe pedir confirmación.
              </li>
              <li>
                Cuando se realice la modificación de los datos de un cliente, los
                campos que no se han cambiado deberán permanecer inalterados en la
                base de datos.
              </li>
            </ul>
          </div>
          <div class="panel-footer">
            <a class="btn btn-default" href="pagina.php?ejercicio=02" role="button">Solución</a>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>
            <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
            Ejercicio 3
            </h4>
          </div>
          <div class="panel-body">
            Modifica la tienda virtual realizada anteriormente de tal forma que
            todos los datos de los artículos se guarden en una base de datos.
          </div>
          <div class="panel-footer">
            <a class="btn btn-default" href="pagina.php?ejercicio=03" role="button">Solución</a>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>
            <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
            Ejercicio 4
            </h4>
          </div>
          <div class="panel-body">
            Crea el programa GESTISIMAL (GESTIón SIMplifcada de Almacén) para llevar
            el control de los artículos de un almacén. De cada artículo se debe saber
            el código, la descripción, el precio de compra, el precio de venta y el
            stock (número de unidades). La entrada y salida de mercancía supone
            respectivamente el incremento y decremento de stock de un determinado
            artículo. Hay que controlar que no se pueda sacar más mercancía de la
            que hay en el almacén. El programa debe tener, al menos, las siguientes
            funcionalidades: listado, alta, baja, modificación, entrada de mercancía
            y salida de mercancía.
          </div>
          <div class="panel-footer">
            <a class="btn btn-default" href="pagina.php?ejercicio=04" role="button">Solución</a>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>
            <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
            Ejercicio 5
            </h4>
          </div>
          <div class="panel-body">
            Modifica el programa anterior añadiendo las siguientes mejoras:
            <ul>
              <li>
                Comprueba la existencia del código en el alta, la baja y la modificación
                de artículos para evitar errores.
              </li>
              <li>
                Cambia la opción "Salida de stock" por "Venta". Esta nueva opción
                permitirá hacer una venta de varios artículos y emitir la factura
                correspondiente. Se debe preguntar por los códigos y las cantidades
                de cada artículo que se quiere comprar. Aplica un 21% de IVA.
              </li>
            </ul>
          </div>
          <div class="panel-footer">
            <a class="btn btn-default" href="pagina.php?ejercicio=05" role="button">Solución</a>
          </div>
        </div>
    </div>
    
    <div id="footer">
      <p class="text-center">© Luis José Sánchez González</p>
    </div>
    
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
