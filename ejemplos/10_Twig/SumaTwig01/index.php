<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/plantillas');
  $twig = new Twig_Environment($loader);

  if (!isset($_GET['x'])) {
    $formulario = $twig->loadTemplate('formulario.html.twig');
    echo $formulario->render(array());
  } else {
    $suma = $_GET['x'] + $_GET['y'];
    $resultado = $twig->loadTemplate('resultado.html.twig');    
    echo $resultado->render(array('suma' => $suma));
  }