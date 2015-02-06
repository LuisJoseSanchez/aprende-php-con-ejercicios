<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/plantillas');
  $twig = new Twig_Environment($loader);

  if (isset($_GET['x'])) {
    $suma = $_GET['x'] + $_GET['y'];
  }

  $formulario = $twig->loadTemplate('formulario.html.twig');
  echo $formulario->render(array('x' => $_GET['x'], 'y' => $_GET['y'], 'suma' => $suma));