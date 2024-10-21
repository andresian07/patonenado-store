<?php

class InsertLoginController
{
   public static function insertLogin($nombre,$email,$password)
   {
      $respuesta = InsertLoginModel::insertLogin($nombre,$email,$password);
      if ($respuesta == true) {
        echo "<script>
                Swal.fire({
                title: '¡BUEN TRABAJO!',he
                text: '¡Se agregó la cuenta correctamente!',
                icon: 'success'
                }).then((result) => {
                          if (result.isConfirmed) {
                              window.location = 'index.php?modulo=crearUsuario';
                          }
                });
              </script>";
    } else {
        echo "<script>
                Swal.fire({
                title: '¡ERROR!',
                text: '¡No se creo la cuenta!',
                icon: 'error'
                }).then((result) => {
                          if (result.isConfirmed) {
                              window.location = 'index.php?modulo=login';
                          }
                });
              </script>";
    }
}
}