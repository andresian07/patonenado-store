<?php

class ProductsController
{
    public static function selectAllProducts()
    {
        $respuesta = ProductsModel::selectAllProducts();
        return $respuesta;
    }

    public static function selectProductAdminId($id)
    {
        $respuesta = ProductsModel::selectProductAdminId($id);
        return $respuesta;
    }

    public static function eliminar($id)
    {
       $respuesta = ProductsModel::eliminar($id);
       if ($respuesta == true) {
        echo "<script>
                Swal.fire({
                title: '¡BUEN TRABAJO!',
                text: '¡Se elimino el producto correctamente!',
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
                text: '¡No se elimino el producto!',
                icon: 'error'
                }).then((result) => {
                          if (result.isConfirmed) {
                              window.location = 'index.php?modulo=insertar';
                          }
                });
              </script>";
    }
    }

    public static function update($id,$nombre,$descripcion,$precio,$stock,$imagen,$banner,$caracteristica_1,$nombrec_1,
    $caracteristica_2,$nombrec_2,$caracteristica_3,$nombrec_3,$reseña_1,$nombrer_1,$reseña_2,$nombrer_2,$reseña_3,$nombrer_3)
    {
        $respuesta = ProductsModel::update($id,$nombre,$descripcion,$precio,$stock,$imagen,$banner,$caracteristica_1,$nombrec_1,
        $caracteristica_2,$nombrec_2,$caracteristica_3,$nombrec_3,$reseña_1,$nombrer_1,$reseña_2,$nombrer_2,$reseña_3,$nombrer_3);
        if ($respuesta == true) {
            echo "<script>
                    Swal.fire({
                    title: '¡BUEN TRABAJO!',
                    text: '¡Se agrego el producto correctamente!',
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
                    text: '¡No se agrego el producto!',
                    icon: 'error'
                    }).then((result) => {
                              if (result.isConfirmed) {
                                  window.location = 'index.php?modulo=editar';
                              }
                    });
                  </script>";
        }

    }
}