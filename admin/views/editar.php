<?php
if (isset($_GET['editar'])) {
    $item = ProductsController::selectProductAdminId($_GET['editar']);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto: <?= $item['nombre'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="text-center bg-dark text-light py-5">
        <div class="container">
            <h1>Editar Producto: <?= $item['nombre'] ?></h1>
        </div>
    </header>

    <div class="container mt-5">
        <form action="index.php?modulo=editar" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $item['id'] ?>">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $item['nombre'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?= $item['descripcion'] ?></textarea>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.001" class="form-control" id="precio" name="precio" value="<?= $item['precio'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="<?= $item['stock'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen del Producto</label>
                <input type="file" class="form-control" id="imagen" name="imagen">
                <small class="form-text text-muted">Deja este campo vacío si no deseas cambiar la imagen actual.</small>
            </div>

            <div class="mb-3">
                <label for="banner" class="form-label">Banner del Producto</label>
                <input type="file" class="form-control" id="banner" name="banner">
                <small class="form-text text-muted">Deja este campo vacío si no deseas cambiar el banner actual.</small>
            </div>

            <!-- Características -->
            <h4>Características del Producto</h4>
            <div class="mb-3">
                <label for="nombrec_1" class="form-label">Nombre Característica 1</label>
                <input type="text" class="form-control" id="nombrec_1" name="nombrec_1" value="<?= $item['nombrec_1'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="caracteristica_1" class="form-label">Característica 1</label>
                <input type="text" class="form-control" id="caracteristica_1" name="caracteristica_1" value="<?= $item['caracteristica_1'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="nombrec_2" class="form-label">Nombre Característica 2</label>
                <input type="text" class="form-control" id="nombrec_2" name="nombrec_2" value="<?= $item['nombrec_2'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="caracteristica_2" class="form-label">Característica 2</label>
                <input type="text" class="form-control" id="caracteristica_2" name="caracteristica_2" value="<?= $item['caracteristica_2'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="nombrec_3" class="form-label">Nombre Característica 3</label>
                <input type="text" class="form-control" id="nombrec_3" name="nombrec_3" value="<?= $item['nombrec_3'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="caracteristica_3" class="form-label">Característica 3</label>
                <input type="text" class="form-control" id="caracteristica_3" name="caracteristica_3" value="<?= $item['caracteristica_3'] ?>" required>
            </div>

            <!-- Reseñas -->
            <h4>Reseñas del Producto</h4>
            <div class="mb-3">
                <label for="nombrer_1" class="form-label">Nombre Reseña 1</label>
                <input type="text" class="form-control" id="nombrer_1" name="nombrer_1" value="<?= $item['nombrer_1'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="reseña_1" class="form-label">Reseña 1</label>
                <textarea class="form-control" id="reseña_1" name="reseña_1" rows="2" required><?= $item['reseña_1'] ?></textarea>
            </div>

            <div class="mb-3">
                <label for="nombrer_2" class="form-label">Nombre Reseña 2</label>
                <input type="text" class="form-control" id="nombrer_2" name="nombrer_2" value="<?= $item['nombrer_2'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="reseña_2" class="form-label">Reseña 2</label>
                <textarea class="form-control" id="reseña_2" name="reseña_2" rows="2" required><?= $item['reseña_2'] ?></textarea>
            </div>

            <div class="mb-3">
                <label for="nombrer_3" class="form-label">Nombre Reseña 3</label>
                <input type="text" class="form-control" id="nombrer_3" name="nombrer_3" value="<?= $item['nombrer_3'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="reseña_3" class="form-label">Reseña 3</label>
                <textarea class="form-control" id="reseña_3" name="reseña_3" rows="2" required><?= $item['reseña_3'] ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <footer class="text-center py-4">
        <p class="text-white">&copy; 2024 Patoneando Store. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php 
if (isset($_POST['id'])) {
   $id = $_POST['id'];
   $nombre = $_POST['nombre'];
   $descripcion = $_POST['descripcion'];
   $precio = $_POST['precio'];
   $stock= $_POST['stock'];
   $imagen = $_FILES["imagen"]["tmp_name"];
   $nameImagen = $_FILES["imagen"]["name"];
   $banner = $_FILES["banner"]["tmp_name"];
   $nameBanner = $_FILES["banner"]["name"];
   $caracteristica_1 = $_POST['caracteristica_1'];
   $nombrec_1 = $_POST['nombrec_1'];
   $caracteristica_2 = $_POST['caracteristica_2'];
   $nombrec_2 = $_POST['nombrec_2'];
   $caracteristica_3 = $_POST['caracteristica_3'];
   $nombrec_3 = $_POST['nombrec_3'];
   $reseña_1 = $_POST['reseña_1'];
   $nombrer_1 = $_POST['nombrer_1'];
   $reseña_2 = $_POST['reseña_2'];
   $nombrer_2 = $_POST['nombrer_2'];
   $reseña_3 = $_POST['reseña_3'];
   $nombrer_3 = $_POST['nombrer_3'];

   move_uploaded_file($imagen, $_SERVER['DOCUMENT_ROOT'] . "/e-commerce/admin/imagenes/$nameImagen");
   move_uploaded_file($banner, $_SERVER['DOCUMENT_ROOT'] . "/e-commerce/admin/imagenes/$nameBanner");

   $agregar = ProductsController::update($id,$nombre,$descripcion,$precio,$stock,$nameImagen,$nameBanner,$caracteristica_1,$nombrec_1,
   $caracteristica_2,$nombrec_2,$caracteristica_3,$nombrec_3,$reseña_1,$nombrer_1,$reseña_2,$nombrer_2,$reseña_3,$nombrer_3);

}
?>
