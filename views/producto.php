<?php
if (isset($_GET['producto'])) {
    $item = ProductosController::selectProductId($_GET['producto']);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($item['nombre']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Atención -->
    <header class="text-center bg-dark text-light py-5">
        <div class="container">
            <h1><?= htmlspecialchars($item['nombre']) ?></h1>
            <p>¡Descubre cómo este producto transformará tu experiencia!</p>
            <img src="admin/imagenes/<?= htmlspecialchars($item['banner']) ?>" alt="Imagen del Producto" class="img-fluid my-4">
            <a href="index.php?modulo=formulario&comprar=<?= urlencode($item['nombre']) ?>" class="btn btn-success btn-lg">¡Compra ahora!</a>
        </div>
    </header>

    <!-- Descripción -->
    <section id="descripcion" class="py-5 text-center d-flex justify-content-center">
        <div class="container">
            <h2 class="text-white">Descripción 🌟</h2>
            <p class="text-white"><?= htmlspecialchars($item['descripcion']) ?></p>
            <img src="admin/imagenes/<?= htmlspecialchars($item['imagen']) ?>" alt="Imagen del Producto" class="img-fluid my-4">
        </div>
    </section>

    <!-- Interés -->
    <section id="interest" class="py-5 text-center">
        <div class="container">
            <h2 class="text-white">¿Por qué es especial? 🌟</h2>
            <p class="text-white">Este producto ofrece características únicas que lo hacen indispensable:</p>
            <ul class="list-unstyled">
                <li class="text-white">🔍<strong><?= htmlspecialchars($item['nombrec_1']) ?></strong>: <?= htmlspecialchars($item['caracteristica_1']) ?></li>
                <li class="text-white">📅<strong><?= htmlspecialchars($item['nombrec_2']) ?></strong>: <?= htmlspecialchars($item['caracteristica_2']) ?></li>
                <li class="text-white">✨<strong><?= htmlspecialchars($item['nombrec_3']) ?></strong>: <?= htmlspecialchars($item['caracteristica_3']) ?></li>
            </ul>
        </div>
    </section>

    <!-- Deseo -->
    <section id="desire" class="bg-light py-5 text-center">
        <div class="container">
            <h2>Lo que dicen nuestros clientes 🗣️</h2>
            <div class="row">
                <div class="col-12 col-md-4">
                    <blockquote class="blockquote">
                        <p class="text-center"><?= htmlspecialchars($item['reseña_1']) ?></p>
                        <footer class="blockquote-footer text-center"><?= htmlspecialchars($item['nombrer_1']) ?></footer>
                    </blockquote>
                </div>
                <div class="col-12 col-md-4">
                    <blockquote class="blockquote">
                        <p class="text-center"><?= htmlspecialchars($item['reseña_2']) ?></p>
                        <footer class="blockquote-footer text-center"><?= htmlspecialchars($item['nombrer_2']) ?></footer>
                    </blockquote>
                </div>
                <div class="col-12 col-md-4">
                    <blockquote class="blockquote">
                        <p class="text-center"><?= htmlspecialchars($item['reseña_3']) ?></p>
                        <footer class="blockquote-footer text-center"><?= htmlspecialchars($item['nombrer_3']) ?></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <div class="container d-flex flex-column align-items-center mt-5">
        <h2 class="text-center text-warning">PAGO CONTRA ENTREGA RECOGE Y PAGALO CUANDO LO RECIBAS</h2>
        <img src="admin/imagenes/pago.png" alt="Pago contra entrega" class="img-fluid mt-3" width="500">
    </div>

    <!-- Acción -->
    <section id="cta" class="text-center py-5">
        <div class="container">
            <h2 class="text-white">¡No esperes más! 🚀</h2>
            <p class="text-white">Transforma tu experiencia con nuestro producto. ¡Haz tu compra ahora!</p>
            <a href="index.php?modulo=formulario&comprar=<?= urlencode($item['nombre']) ?>" class="btn btn-danger btn-lg text-white">¡Compra ahora!</a>
        </div>
    </section>

    <div class="container d-flex flex-column align-items-center mt-5">
        <h2 class="text-center text-danger m-2">QUEDAN POCAS UNIDADES NO TE QUEDES SIN LA TUYA</h2>
        <img src="admin/imagenes/ultimasn.png" alt="Últimas unidades" class="img-fluid d-flex justify-content-center m-2" width="500">
    </div>

    <div class="container d-flex justify-content-center">
        <a href="index.php?modulo=formulario&comprar=<?= urlencode($item['nombre']) ?>" class="btn btn-danger btn-lg text-white">¡Compra ahora!</a>
    </div>

    <!-- Pie de página -->
    <footer class="text-center py-4">
        <p class="text-white">&copy; 2024 Tu Empresa. Todos los derechos reservados.</p>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
