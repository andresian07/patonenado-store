<?php

class InsertarController
{
    public static function insertProduct($nombre, $descripcion, $precio, $stock, $imagen)
    {
        $respuesta = InsertarModel::insertProduct($nombre, $descripcion, $precio, $stock, $imagen);
        if ($respuesta == true) {
            echo "<script>
                    Swal.fire({
                    title: '¡BUEN TRABAJO!',
                    text: '¡Se agregó el producto correctamente!',
                    icon: 'success'
                    }).then((result) => {
                              if (result.isConfirmed) {
                                  window.location = 'index.php?modulo=inicio';
                              }
                    });
                  </script>";
        } else {
            echo "<script>
                    Swal.fire({
                    title: '¡ERROR!',
                    text: '¡No se agregó el producto!',
                    icon: 'error'
                    }).then((result) => {
                              if (result.isConfirmed) {
                                  window.location = 'index.php?modulo=insertar';
                              }
                    });
                  </script>";
        }
    } // Cierre del método insertProduct
} // Cierre de la clase InsertarController
