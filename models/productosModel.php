<?php 
class ProductosModel extends Conexion
{
    public static function selectall()
    {
        $conexion = self::sql();
        $stm = $conexion->query("SELECT * FROM `productos` WHERE 1");
        return $stm;
    }

     //SELECT producto por id
     public static function selectProductId($id)
     {
        $conexion = self::sql();
        $stm = $conexion->query("SELECT * FROM `productos` WHERE `id` = $id")->fetch_assoc();
        return $stm;
     }
 }