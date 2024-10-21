<main class="container">
    <h1 class="text-center my-5">CREAR PRUDUCTO</h1>
    <div class="d-flex justify-content-center my-3">
        <form action="index.php?modulo=insertar" method="post" class="col-md-6" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="post" class="form-label">nombre</label>
                <input type="nombre" name="nombre" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="post" class="form-label">descripcion</label>
                <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="post" class="form-label">precio</label>
                <input type="number" name="precio" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="post" class="form-label">stock</label>
                <input type="number" name="stock" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="post" class="form-label">imagen</label>
                <input type="file" name="imagen" id="" class="form-control">
            </div>
            <input type="submit" value="ENVIAR" class="btn btn-primary container">
        </form>
    </div>
</main>

<?php
if (isset($_POST['nombre'])) {
   $nombre = $_POST['nombre'];
   $descripcion = $_POST['descripcion'];
   $precio = $_POST['precio'];
   $stock = $_POST['stock'];
   $imagen = $_FILES["imagen"]["tmp_name"];
   $nameImagen = $_FILES["imagen"]["name"];

   move_uploaded_file($imagen, $_SERVER['DOCUMENT_ROOT'] . "/e-commerce/admin/imagenes/$nameImagen");

   $agregar = InsertarController::insertProduct($nombre, $descripcion, $precio, $stock, $nameImagen);
}
?>