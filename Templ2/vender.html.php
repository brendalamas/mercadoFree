<!DOCTYPE html>
<!-- saved from url=(0032)https://www.mercadolibre.com.ar/ -->
<html lang="es-AR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?=isset($title) ? $title : "MercadoFree" ?></title>
    <!--<base href="/">-->
    <base href=".">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
   <!--  <link rel="stylesheet" href="./styles/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./styles2/styles.css">
    <link rel="stylesheet" href="./styles2/navbar.css">
    <link rel="stylesheet" href="./styles2/footer.css">
    <link rel="stylesheet" href="./styles2/carro.css">
    <link rel="stylesheet" href="./styles2/card.css">
    <link rel="stylesheet" href="./styles2/header.css">
    <link rel="stylesheet" href="./styles2/detalle_prod.css">
    <!Estilo agregado para el icono del menu">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!--  <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/popper.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    
    <?php
        if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
          if ($_SESSION['user'] == 'clientes') {
            include __DIR__ . '/../Templ2/header_L.html.php';
          } else {
            include __DIR__ . '/../Templ2/header_L.html.php';
          }
      } else {
        include __DIR__ . '/../Templ2/header_NL.html.php';
      }
    ?>

      <section  id="Catalogo">
        <div  class="container my-5 d-flex justify-content-between">
          <h2 >Lista de Productos - <span 
              style="font-weight: bold;">Bienvenido <?=$_SESSION['nombre']?></span>
          </h2>
          <a href="./add_edit.php"><button  type="button"
            class="btn btn-outline-success add">Agregar
            Producto</button></a>
        </div>
        <div  class="container table-responsive my-5">
          <table  class="table align-middle table-hover">
            <thead >
              <tr >
                <th  scope="col">#</th>
                <th  scope="col">Nombre</th>
                <th  scope="col">Precio</th>
                <th  scope="col">Categoria</th>
                <th  scope="col">Descripción</th>
                <th  scope="col">Cantidad</th>
                <th  scope="col">Imagen</th>
                <th  scope="col"></th>
              </tr>
            </thead>
            <tbody  class="table-group-divider">
              
            <?php
                for ($i=0; $i < count($productos) ; $i++) { 
                    include __DIR__ . '/../Templ2/vende_indv.html.php';
                }
            ?>
              
            </tbody>
          </table>
        </div>
      </section>
    
    <app-footer  _nghost-ng-c920763379="">
        <div  id="footer" class="container">
            <footer  class="py-3 my-4">
                <ul  class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li  class="nav-item"><a  href="#"
                            class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li  class="nav-item"><a  href="#"
                            class="nav-link px-2 text-body-secondary">Features</a></li>
                    <li  class="nav-item"><a  href="#"
                            class="nav-link px-2 text-body-secondary">Pricing</a></li>
                    <li  class="nav-item"><a  href="#"
                            class="nav-link px-2 text-body-secondary">FAQs</a></li>
                    <li  class="nav-item"><a  href="#"
                            class="nav-link px-2 text-body-secondary">About</a></li>
                </ul>
                <p  class="text-center text-body-secondary">© 2023 Company, Inc</p>
            </footer>
        </div>
    </app-footer>

      <script src=”https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js” ></script>

      <script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” ></script>
</body>