<main class="container">
    <h1 class="text-center my-5">LOGIN</h1>
    <div class="d-flex justify-content-center my-3">
        <form action="index.php?modulo=login" method="post" class="col-md-6">
            <div class="mb-3">
                <label for="post" class="form-label">EMAIL:</label>
                <input type="email" name="email" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="post" class="form-label">PASSWORD</label>
                <input type="password" name="password" id="" class="form-control">
            </div>
            <input type="submit" value="ENVIAR" class="btn btn-primary container">
        </form>
    </div>
    <div class="d-flex justify-content-center my-3">
        <p class="text-center">si no tienes cuenta -><a href="index.php?modulo=crearUsuario" class="w-50 text-center">Crear cuenta</a></p>
    </div>
    
</main>

<?php
$cuentas = LoginController::selectAllLogin();
// Verificar si la sesión ya ha sido iniciada antes de llamar a session_start()
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_POST['email']) && isset($_POST['password'])) {
   $email = $_POST['email'];
   $password = $_POST['password'];

   foreach ($cuentas as $cuenta) {
    if ($cuenta['email'] == $email && $cuenta['password'] == $password) {
      $_SESSION['nombre'] = $cuenta['nombre'];
      header("location:index.php?modulo=inicio");

    }else {
      echo "<p class ='text-center text-danger'>su contraseña o correo son incorrectas</p>";
    }
   }
}
?>