<!DOCTYPE html>
<!-- saved from url=(0032)https://www.mercadolibre.com.ar/ -->
<html lang="es-AR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?= isset($title) ? $title : "MercadoFree" ?></title>
    <!--<base href="/">-->
    <base href=".">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!--  <link rel="stylesheet" href="./styles/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./styles2/edit.css">
    <link rel="stylesheet" href="./styles2/carrito.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--  <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/popper.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }
    </style>

</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" ng-reflect-router-link="/dashboard" href="/dashboard">
        <i class="fa fa-arrow-right-from-bracket fa-rotate-180 fa-xl"></i>
        </a>
    </div>
</nav>

<div class="container-fluid d-flex flex-row justify-content-center bg-light">
    <h3 class="dashboard__operacion">Editar Producto</h3>
</div>

<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 700px;">
            <form action="./vender.php" method="post">
                <div class="mb-3 col-12">
                    <input type="text" class="form-control" name="producto[id_producto]" value="<?= isset($producto['id_producto']) ? $producto['id_producto'] : '' ?>" style="display: none;">
                </div>
                <div class="mb-3 col-12">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="producto[nombre]" value="<?= isset($producto['nombre']) ? $producto['nombre'] : '' ?>" required>
                </div>
                <div class="mb-3 col-12">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id="precio" name="producto[precio]" value="<?= isset($producto['precio']) ? $producto['precio'] : '' ?>" required>
                </div>
                <div class="mb-3 col-12">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" class="form-control" id="descripcion" name="producto[descripcion]" value="<?= isset($producto['descripcion']) ? $producto['descripcion'] : '' ?>" required>
                </div>
                <div class="mb-3 col-12">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="producto[cantidad]" value="<?= isset($producto['cantidad']) ? $producto['cantidad'] : '' ?>" required>
                </div>
                <div class="mb-5 col-12">
                    <label for="imagen" class="form-label">URL de la Imagen</label>
                    <input type="text" class="form-control" id="imagen" name="producto[imagen]" value="<?= isset($producto['ruta']) ? $producto['ruta'] : '' ?>" required>
                </div>
                <div class="mb-3 col-12 text-center">
                    <a href="./vender.php" class="btn btn-info mr-4">Atrás</a>
                    <button type="submit" class="btn btn-success">Aceptar</button>
                </div>
            </form>
    </div>
</div>



