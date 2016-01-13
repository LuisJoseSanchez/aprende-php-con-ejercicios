<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
  $twig = new Twig_Environment($loader);
  echo $twig->render('hola.html.twig', []);
