<?php

class loginModel extends Conexion
{
    public static function selectAllLogin()
    {
      $conexion = self::sql();
      $stm = $conexion->query("SELECT * FROM `login` WHERE 1");
      return $stm;
    }
}