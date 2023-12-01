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
    <!--  <link rel="stylesheet" href="./styles2/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./styles2/styles.css">
    <link rel="stylesheet" href="./styles2/navbar.css">
    <link rel="stylesheet" href="./styles2/footer.css">
    <link rel="stylesheet" href="./styles2/carro.css">
    <link rel="stylesheet" href="./styles2/card.css">
    <link rel="stylesheet" href="./styles2/header.css">
    <link rel="stylesheet" href="./styles2/products_section.css">


    <!--  <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/popper.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>

  <?php
    include __DIR__ . '/../Templ2/header_NL.html.php';
  ?>


    <section class="section-products">
        <div class="container mt-5">
            <div class="row">
              <div class="col-5 mx-auto">
                <form method="post" action="">
                  <h1 class="text-center mb-5"> Completá los datos para crear tu cuenta </h1>
                  <div class="mb-3">
                    <label for="signin[correo]" class="form-label fs-4">Agregá tu e-mail:</label><br>
                    <input type="text" name="signin[correo]" class="form-control fs-4" aria-describedby="emailHelp" required><br>
                  </div>
                  <div class="mb-3">
                    <label for="signin[nombre]" class="form-label fs-4">Ingresá tu nombre:</label><br>
                    <input type="text" name="signin[nombre]" class="form-control fs-4" aria-describedby="emailHelp" required><br>
                  </div>
                  <div class="mb-3">
                    <label for="signin[password]" class="form-label fs-4">Crea tu contraseña:</label><br>
                    <input type="password" name="signin[password]" class="form-control fs-4" aria-describedby="emailHelp" required><br><br>
                  </div>
                  <div class="mb-3">
                    <label for="signin[check_vendedor]" class="form-label fs-4">Eres Vendedor?</label>
                    <input type="checkbox" name="signin[check_vendedor]"><br><br>
                  </div>
                  
                  <input type="submit" class="btn btn-primary fs-3 mt-4" value="Registrarme">
                  
                </form>
              </div>
            </div>
          </div>

    </section>

    <?=$modal?>

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

    <script src=”https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js”></script>

    <?=$footer_script?>

    <script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js”></script>
</body>