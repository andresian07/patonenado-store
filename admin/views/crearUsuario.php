<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Cuenta - Administradores</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f7fa;
      font-family: 'Arial', sans-serif;
    }
    .register-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .register-box {
      background-color: white;
      border-radius: 8px;
      padding: 40px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      width: 100%;
      text-align: center;
    }
    .register-box h1 {
      font-size: 2rem;
      margin-bottom: 20px;
      color: #333;
    }
    .register-box p {
      font-size: 0.9rem;
      color: #777;
      margin-bottom: 20px;
    }
    .form-control {
      height: 50px;
      margin-bottom: 20px;
      border-radius: 30px;
      padding: 10px 20px;
    }
    .btn-register {
      width: 100%;
      padding: 12px;
      border-radius: 30px;
      background-color: #28a745;
      color: white;
      font-size: 1rem;
    }
    .btn-register:hover {
      background-color: #218838;
    }
    .form-text a {
      color: #007bff;
      text-decoration: none;
    }
    .form-text a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="register-container">
    <div class="register-box">
      <h1>Crear Cuenta</h1>
      <p>Completa el siguiente formulario para crear tu cuenta de administrador.</p>
      <form action="index.php?modulo=crearUsuario" method="POST">
        <div class="mb-3">
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo" required>
        </div>
        <div class="mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
        </div>
        <button type="submit" class="btn btn-register">Crear Cuenta</button>
      </form>
      <div class="form-text mt-3">
        <p>¿Ya tienes una cuenta? <a href="index.php?modulo=login">Iniciar sesión</a></p>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['fullname']))
{
  $nombre = $_POST['fullname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $agregar = InsertarController::insertProduct($nombre,$email,$password);
}
?>
