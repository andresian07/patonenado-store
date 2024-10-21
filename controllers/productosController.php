<?php

class ProductosController
{
    public static function selectAll()
    {
        $respuesta = ProductosModel::selectAll();
        return $respuesta;
    }

    public static function selectProductId($id)
    {
        $respuesta = ProductosModel::selectProductId($id);
        return $respuesta;
    }
}