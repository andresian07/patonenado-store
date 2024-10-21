<?php

class ProductsModel extends Conexion
{
    public static function selectAllProducts()
    {
        $conexion = self::sql();
        $stm = $conexion->query("SELECT * FROM `productos` WHERE 1");
        return $stm;
    }

      //SELECT producto por id
      public static function selectProductAdminId($id)
      {
         $conexion = self::sql();
         $stm = $conexion->query("SELECT * FROM `productos` WHERE `id` = $id")->fetch_assoc();
         return $stm;
      }


    public static function eliminar($id)
    {
        $conexion = self::sql();
        $stm = $conexion->query("DELETE FROM `productos` WHERE `id` = $id");
        return $stm;
    }

    public static function update($id, $nombre, $descripcion, $precio, $stock, $imagen, $banner, 
    $caracteristica_1, $nombrec_1, $caracteristica_2, $nombrec_2, 
    $caracteristica_3, $nombrec_3, $reseña_1, $nombrer_1, 
    $reseña_2, $nombrer_2, $reseña_3, $nombrer_3)
{
    $conexion = self::sql();
    $stm = $conexion->query("UPDATE `productos` SET 
        `nombre`='$nombre', 
        `descripcion`='$descripcion', 
        `precio`=$precio, 
        `stock`=$stock, 
        `imagen`='$imagen', 
        `banner`='$banner', 
        `caracteristica_1`='$caracteristica_1', 
        `nombrec_1`='$nombrec_1', 
        `caracteristica_2`='$caracteristica_2', 
        `nombrec_2`='$nombrec_2', 
        `caracteristica_3`='$caracteristica_3', 
        `nombrec_3`='$nombrec_3', 
        `reseña_1`='$reseña_1', 
        `nombrer_1`='$nombrer_1', 
        `reseña_2`='$reseña_2', 
        `nombrer_2`='$nombrer_2', 
        `reseña_3`='$reseña_3', 
        `nombrer_3`='$nombrer_3' 
        WHERE `id` = $id");
    
    return $stm;
}



}

   
