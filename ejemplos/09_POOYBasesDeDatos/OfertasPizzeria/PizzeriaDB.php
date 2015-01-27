<?php

class PizzeriaDB {
  private static $servidor = 'localhost';
  private static $base = 'pizzeria';
  private static $usuario = 'root';
  private static $clave = 'root';

  public static function conectaDB() {
    $conexion = mysql_connect(self::$servidor, self::$usuario, self::$clave)
          or die (mysql_error());
    mysql_select_db(self::$base, $conexion);
    
    return $conexion;
  }
  
  public static function desconectaDB() {
    mysql_close();
  }
}
