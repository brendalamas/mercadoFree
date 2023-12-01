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
    <link rel="stylesheet" href="./styles2/products_section.css">
    <!Estilo agregado para el icono del menu">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!--  <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/popper.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    
    <?php
        include __DIR__ . '/../Templ2/header_LV.html.php';
    ?>

    <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

 
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img2/carouselPortada.webp" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="./img2/semanaDelMueble.webp" class="d-block" style="width:100%"> 
    </div>
    <div class="carousel-item">
      <img src="./img2/especialDeportes.webp" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="./img2/semanaDelAudio.webp" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
    
   
    

<?=$grilla?>
    <!--  -->
    
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