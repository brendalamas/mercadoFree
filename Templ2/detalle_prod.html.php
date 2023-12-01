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
  <script type="text/javascript" language="javascript" src="./js/add_car.js"></script>

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

<div  class="container my-5">
  <div  class="row">
    <div  class="col-md-5">
      <div  class="main-img"><img  class="img-fluid"
          src="<?=$producto['ruta']?>"></div>
    </div>
    <div  class="col-md-7">
      <div  class="main-description px-2">
        <div  class="category text-bold"></div>
        <div  class="product-title text-bold my-3"> <?=$producto['nombre']?> </div>
        <div  class="price-area my-4">
          <text  class="old-price mb-1" style="text-decoration: line-through;">$ <?=number_format($producto['precio']/0.8)?> </text><text style="display: in-line"><span 
              class="old-price-discount text-danger">(20% off)</span></text>
          <p  class="new-price text-bold mb-1">$ <?=number_format($producto['precio'])?></p>
          <p  class="text-secondary mb-1 letra-chica" style="color: #6C757D; font-size: 13px; font-family: Roboto, Helvetica Neue', sans-serif;"> (El costo de envío no está incluido
            en el precio) </p>
        </div>
        <div  class="buttons d-flex my-5">
        <?php
        if (isset($_SESSION['tipo'])) {
            if ($_SESSION['tipo'] == 'clientes') {
              ?>
                <button  type="button" id="ir_carro"
                class="shadow btn custom-btn me-5" onclick="add_cart_detail(<?=$producto['id_producto']?>)"> Agregar al carrito </button>
              <?php
            } else {
              ?>
                <button  type="button" id="ir_carro"
                class="shadow btn custom-btn me-5" data-bs-toggle="modal" data-bs-target="#exampleModal"> Agregar al carrito </button>
              <?php
            }
        } else {
            ?>
              <button  type="button" id="ir_carro"
              class="shadow btn custom-btn me-5" data-bs-toggle="modal" data-bs-target="#exampleModal"> Agregar al carrito </button>
            <?php
        }
        ?>
        
          <div  class="block quantity"><input  type="number"
              id="cart_quantity" placeholder="Enter quantity" name="cart_quantity"
              class="form-control ng-untouched ng-pristine ng-valid"  value="1" min="0" max="5"></div>
        </div>
      </div>
      <div  class="product-details my-4">
        <p  class="details-title text-color mb-1 text-uppercase" style="color: #757575; font-size: 15px; font-family: Roboto, Helvetica Neue', sans-serif;"> Detalle del producto</p>
        <p  class="description"><?=$producto['descripcion']?></p>
      </div>
      <div  class="delivery my-4">
        <p  class="font-weight-bold mb-0"><span ><i
               class="fa fa-truck" style="font-size:24px;"></i></span><b > La
            entrega tarde 3 dias a partir de la venta.</b></p>
        <p  class="text-secondary"> Ordena ahora para que llegue a tu domicilio</p>
      </div>
      <div  class="delivery-options my-4">
        <p  class="font-weight-bold mb-0"><span ><i
               class="fa fa-filter" style="font-size:24px;"></i></span><b >
            Opciones de entrega.</b></p>
        <p  class="text-secondary"> Vea las opciones de envío <a
             href="#"> aquí</a></p>
      </div>
    </div>
  </div>
</div>
    <!--  -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mensaje</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Para agregar al carro debe ingresar con un usuario cliente
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal  aviso carrito-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Agregado al carrito</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p id="mensaje_Modal"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal -->
    
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
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” ></script>
</body>