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
    <link rel="stylesheet" href="./styles2/access.css">
    <link rel="stylesheet" href="./styles2/products_section.css">
    <!Estilo agregado para el icono del menu">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!--  <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/popper.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" language="javascript" src="./js/access.js"></script>

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
                  <h1 class="text-center">Iniciar Sesión</h1>
                  
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label fs-4" for="signin[correo]">Correo</label>
                    <input type="email" 
                      class="form-control fs-4" 
                      id="exampleInputEmail1" 
                      aria-describedby="emailHelp" 
                      required
                      name="signin[correo]"
                    >
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fs-4" for="signin[password]">Contraseña</label>
                    <input formControlName="password" 
                      type="password" 
                      class="form-control fs-4" 
                      id="exampleInputPassword1" 
                      required
                      name="signin[password]"
                    >
                  </div>
                  <div class="mb-3 mt-5 form-check">
                    <input
                      type="checkbox"
                      class="form-check-input fs-5"
                      id="exampleCheck1"
                      name="signin[check_vendedor]"
                    />
                    <label class="form-check-label fs-4" for="exampleCheck1" for="signin[check_vendedor]">Eres vendedor?</label>
                  </div>
                  <button type="submit" class="btn btn-primary fs-3 mt-4">
                    Ingresar
                  </button>
                  
                </form>
              </div>
            </div>
          </div>


        <input type="password" id="errores" name="errores" value="<?=isset($num_errores)? $num_errores : 0;?>" style="display: none;">
        
        
        <div id="id01" class="modal">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <div class="modal-content">
            <div class="container">
              <h1>Errores</h1>
                
                <?php
                for ($i = 0; $i < count($errores); $i++) {
                    echo '<p style="font-size: 25px; color: red;">- ' . $errores[$i] . '</p>';
                }  
                ?>
    
              <div class="clearfix">
                <button type="button" class="btn cancelbtn" onclick="document.getElementById('id01').style.display='none'" style="background-color: #4CAF50;">Aceptar</button>
              </div>
            </div>
            </div>
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