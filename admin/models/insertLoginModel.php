<?php

class InsertLoginModel extends Conexion
{
    public static function insertLogin($nombre,$email,$password)
    {
        $conexion = self::sql();
        $stm = $conexion->query("INSERT INTO `login`(`nombre`, `email`, `password`) 
        VALUES ('$nombre','$email','$password')");
        return $stm;
    }
}