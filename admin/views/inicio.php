<h1 class="text-center my-3">TABLA Y ADMINISTRACION DE PRODUCTOS</h1>
<div
    class="table-responsive container my-5">
    <div class="container">
        <a href="index.php?modulo=insertar" class="btn btn-primary">crear</a>
    </div>
    <table
        class="table table-dark">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>descripcion</th>
                <th>precio</th>
                <th>imagen</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $productos = ProductsController::selectAllProducts();
            foreach ($productos as  $producto):
            ?>
                <tr>
                    <td><?= $producto['id'] ?></td>
                    <td><?= $producto['nombre'] ?></td>
                    <td><?= $producto['descripcion'] ?></td>
                    <td><?= $producto['precio'] ?></td>
                    <td><img src="imagenes/<?= $producto['imagen'] ?>" class="card-img-top" alt="Ruta de Montaña" style="width: 100px; height: 150px"></td>
                    <td>
                        <a href="index.php?modulo=inicio&id=<?=$producto['id']?>" class="btn btn-danger">eliminar</a>
                        <a href="index.php?modulo=editar&editar=<?= $producto['id'] ?>" class="btn btn-warning">editar</a>
                    </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>

    <?php 
    if (isset($_GET['id'])) {
        $eliminar = ProductsController::eliminar($_GET['id']);
    }
    ?>
