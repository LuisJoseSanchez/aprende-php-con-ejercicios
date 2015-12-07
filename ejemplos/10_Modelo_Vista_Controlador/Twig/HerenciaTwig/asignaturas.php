<?php
  // Carga el entorno Twig
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/plantillas');
  $twig = new Twig_Environment($loader);
  //////////////////////////////////////////////////////////
    
  $twig->loadTemplate('asignaturas.html.twig')->display(array());
?>
