<?php
// MODELS 
include_once "models/conexion.php";
include_once "models/productosModel.php";

// CONTROLLERS
include_once "controllers/productosController.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Patoneando Store</title>
    <!-- Required meta tags for responsiveness -->
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
    <style>
        body {
            background: #000046;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #1CB5E0, #000046);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #1CB5E0, #000046);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
    </style>

    <!-- Condicional para cargar estilos adicionales en la página de "Nosotros" -->
    <?php if (isset($_GET["modulo"]) && $_GET['modulo'] == "nosotros"): ?>
        <link rel="stylesheet" href="style.css">
    <?php endif ?>
</head>

<body>
    <!-- Encabezado: Logo | Menú simple | Carrito -->
    <?php
    if (!isset($_GET['modulo']) || ($_GET['modulo'] != "formulario" && $_GET['modulo'] != "producto")):
    ?>
        <header class="d-flex justify-content-between align-items-center p-3 bg-light">
            <div class="logo">
                <img src="admin/imagenes/patonenado.png" alt="Logo" style="height: 50px;">
            </div>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="index.php?modulo=inicio" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="index.php?modulo=acerca" class="nav-link">Acerca de</a></li>
                    <li class="nav-item"><a href="index.php?modulo=producto&producto=5" class="nav-link">Ebook</a></li>
                    <li class="nav-item"><a href="index.php?modulo=nosotros" class="nav-link">Nosotros</a></li>
                </ul>
            </nav>
            <div class="cart">
                <a href="#" class="btn btn-primary">Carrito</a>
            </div>
        </header>
    <?php endif; ?>


    <!-- Responsive Main Content -->
    <main class="container mt-4">
        <!-- El contenido dentro de la clase `container` se adapta automáticamente a diferentes tamaños de pantalla -->
        <?php
        $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'inicio';

        switch ($modulo) {
            case 'inicio':
                include_once "views/inicio.php";
                break;
            case 'nosotros':
                include_once "views/nosotros.php";
                break;
            case 'acerca':
                include_once "views/acerca.php";
                break;
            case 'producto':
                include_once "views/producto.php";
                break;
            case "crearLogin":
                include_once "views/crearLogin.php";
                break;
            case "formulario":
                include_once "views/formulario.php";
                break;
            case "editar":
                include_once "views/editarRuta.php";
                break;

            case "patoneando":
                include_once "views/patoneando.php";
                break;
        }
        ?>
    </main>

    <!-- Responsive Footer -->
    <!-- El footer se adapta para que el contenido se vea bien en pantallas pequeñas y grandes usando el sistema de rejilla (`row` y `col-`) -->
    <footer class="bg-dark text-white py-4 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-start">
                    <h5>Explora la Naturaleza con Patoneando Store</h5>
                    <p>Encuentra los mejores productos de montaña para tus aventuras. Calidad y resistencia para cada expedición.</p>
                </div>
                <div class="col-12 col-md-6 text-center text-md-end">
                    <p>Conéctate con nosotros:</p>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Facebook</a></li>
                        <li><a href="#" class="text-white">Instagram</a></li>
                        <li><a href="#" class="text-white">Twitter</a></li>
                    </ul>
                    <p>Copyright © 2024 Patoneando Store</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>