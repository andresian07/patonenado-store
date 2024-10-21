<?php
class Conexion
{
    public static function sql()
    {
        $cnx = new mysqli('localhost','root','','e-commerce');
        return $cnx;
    }
}