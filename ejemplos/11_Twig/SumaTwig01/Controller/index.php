<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
  $twig = new Twig_Environment($loader);

  if (!isset($_GET['x'])) {
    echo $twig->render('formulario.html.twig', []);
  } else {
    $suma = $_GET['x'] + $_GET['y'];
    echo $twig->render('resultado.html.twig', ['suma' => $suma]);
  }