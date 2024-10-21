
<!-- Banner principal con CTA -->
<section id="main-banner">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="admin/imagenes/bannerp.jpg" class="d-block w-100" alt="Banner">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Descubre los mejores consejos para viajar barato</h2>
                    <a href="index.php?modulo=producto&producto=5" class="btn btn-success btn-lg">¡Comprar ahora!</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="admin/imagenes/bannerb.png" class="d-block w-100" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="admin/imagenes/pareja.avif" class="d-block w-100" alt="Banner 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Características clave -->
<section id="features" class="py-5 bg-light text-center">
    <h2>¿Por qué comprar este ebook?</h2>
    <div class="row">
        <div class="col-md-4">
            <i class="fas fa-plane-departure fa-2x"></i>
            <h4>Ahorra en tus vuelos</h4>
            <p>Consejos para encontrar los vuelos más baratos.</p>
        </div>
        <div class="col-md-4">
            <i class="fas fa-hotel fa-2x"></i>
            <h4>Ahorra en hospedaje</h4>
            <p>Encuentra las mejores ofertas de hospedaje.</p>
        </div>
        <div class="col-md-4">
            <i class="fas fa-map fa-2x"></i>
            <h4>Guía completa</h4>
            <p>Planifica tu viaje con nuestra guía detallada.</p>
        </div>
    </div>
</section>

<!-- Sección de productos -->
<section id="products" class="py-5">
    <div class="container">
        <h2 class="text-center m-5">Nuestros Productos</h2>
        <div class="row">
            <?php 
            $productos = ProductosController::selectAll();
            foreach ($productos as $producto): 
            ?>
            <div class="col-md-4 mb-4"> <!-- Agregar mb-4 para margen inferior -->
                <div class="card h-100 border-primary">
                    <img src="admin/imagenes/<?=$producto['imagen']?>" class="card-img-top" alt="<?=$producto['nombre']?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?=$producto['nombre'] ?></h5>
                        <p class="card-text flex-grow-1"><?=$producto['descripcion'] ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Precio: <?=$producto['precio'] ?></li>
                        <li class="list-group-item">Stock: <?=$producto['stock'] ?></li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="index.php?modulo=producto&producto=<?=$producto['id']?>" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Reseñas -->
<section id="reviews" class="py-5 bg-light text-center">
    <h2>Lo que dicen nuestros clientes</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>¡Este ebook cambió mi forma de viajar! Ahora ahorro mucho más.</p>
                    <footer class="blockquote-footer">Cliente satisfecho</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>Los consejos de hospedaje son increíbles, ¡recomendado!</p>
                    <footer class="blockquote-footer">Viajeros felices</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote class="blockquote">
                    <p>Conseguí vuelos muy baratos, este ebook es oro puro.</p>
                    <footer class="blockquote-footer">Viajero frecuente</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Pie de página -->
<footer class="text-center py-4">
    <p>&copy; 2024 Mi Ebook de Viajes. Todos los derechos reservados.</p>
    <div class="social-links">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
</footer>
