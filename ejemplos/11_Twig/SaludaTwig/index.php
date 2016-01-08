<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/plantillas');
  $twig = new Twig_Environment($loader);
  $plantilla = $twig->loadTemplate('saluda.html.twig');
  $codigoHtml = $plantilla->render(array('saludo' => 'hola', 'x' => 24));
  echo $codigoHtml;
