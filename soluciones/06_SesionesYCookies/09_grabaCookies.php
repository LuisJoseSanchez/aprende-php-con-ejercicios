<?php
  session_start();
  setcookie("producto", serialize($_SESSION['producto']), time() + 365 * 24 * 3600);
  header("Location: ".$_SESSION['pagina']);