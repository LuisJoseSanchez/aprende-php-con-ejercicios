<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
  $twig = new Twig_Environment($loader);

  $infoUsuario = $twig->loadTemplate('infoUsuario.html.twig');

  $datos = [
    titulo => 'Información de usuarios',
    usuarios => [
      [ 'nombre' => 'Elena',
        'apellido1' => 'Nito',
        'apellido2' => 'Del Bosque',
        'dni' => '1234567X' ],
      [ 'nombre' => 'Leandro',
        'apellido1' => 'Gado',
        'dni' => '3546732Q' ],
    ]
  ];

  echo $twig->render('infoUsuario.html.twig', $datos);
