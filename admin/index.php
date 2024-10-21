<?php
session_start();

include_once "models/conexion.php";
include_once "models/insertarModel.php";
include_once "models/loginModel.php";
include_once "models/insertLoginModel.php";
include_once "models/productsModel.php";

//CONTROLLERS
include_once "controllers/insertController.php";
include_once "controllers/insertLoginController.php";
include_once "controllers/LoginController.php";
include_once "controllers/productsController.php";

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <?php
        $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'login';
        switch ($modulo) {
            case 'login':
                include_once 'views/login.php';
                break;
            case 'inicio':
                include_once 'views/inicio.php';
                break;
            case 'crearUsuario':
                include_once 'views/crearUsuario.php';
                break;
            case 'insertar':
                include_once 'views/insertar.php';
                break;

            case 'editar':
                include_once 'views/editar.php';
                break;




            default:
                # code...
                break;
        }
        ?>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>