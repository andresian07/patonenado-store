<?php 

class InsertarModel extends Conexion
{
    public static function insertProduct($nombre,$descripcion,$precio,$stock,$imagen)
    {
        $conexion = self::sql();
        $stm = $conexion->query("INSERT INTO `productos`(`nombre`, `descripcion`, `precio`, `stock`, `imagen`) VALUES ('$nombre','$descripcion','$precio','$stock','$imagen')");
        return $stm;
    }
}