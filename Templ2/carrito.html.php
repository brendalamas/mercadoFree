<!DOCTYPE html>
<!-- saved from url=(0032)https://www.mercadolibre.com.ar/ -->
<html lang="es-AR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title><?= $title ?></title>
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
    <link rel="stylesheet" href="./styles2/carrito.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--  <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/popper.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="./js/add_car.js"></script>
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }
    </style>

</head>

<body>

    <div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex flex-row align-items-center">
                        <a href="./index.php">
                            <i class="fa fa-long-arrow-left" style="font-size: 20px;"></i>
                        </a>
                        <span class="ml-2" style="font-size: 18px;">Continuar Comprando</span>
                    </div>
                    <hr>
                    <h6 class="mb-0" style="font-size: 18px;">Carrito de compra</h6>
                    <div class="d-flex justify-content-between"><span style="font-size: 18px;">Vos tenés <?= count($carrito) ?> items en tu carrito</span>

                    </div>

                    <?php
                    for ($i = 0; $i < count($carrito); $i++) {
                        include __DIR__ . '/../Templ2/item_ind_carrito.html.php';
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-4" style="font-size: 18px;">
                <div class="payment-info">
                    <div class="d-flex justify-content-between align-items-center" ><span>Detalles del carrito</span></div>


                    <hr class="line">
                    <div class="d-flex justify-content-between information" style="font-size: 18px;"><span>Subtotal</span><span>$<?= number_format($total) ?></span></div>
                    <div class="d-flex justify-content-between information" style="font-size: 18px;"><span>Envio</span><span>$20</span></div>
                    <div class="d-flex justify-content-between information" style="font-size: 18px;">
                        <span>Total(Incl. imp)</span><span>$<?= number_format($total + 20) ?></span>
                    </div>

                    <form action="" method="post" >
                        <input type="text" class="form-control fs-4" id="exampleInputPassword1" name="compra[dummy]" style="display: none;">
                        <button class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="submit">
                            <span style="font-size: 14px;">$<?= number_format($total + 20) ?></span>
                            <span style="font-size: 14px;">Checkout
                                <i class="fa fa-long-arrow-right ml-1" style="font-size: 18px;"></i>
                            </span>
                        </button>
                    </form>
                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-primary d-flex align-items-center" style="font-size: 14px;" onclick="sendEmail()"> 
                            <i class="fa fa-envelope mr-2"></i> 
                            <?= $correo ?>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <app-footer _nghost-ng-c920763379="">
        <div id="footer" class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
                </ul>
                <p class="text-center text-body-secondary">© 2023 Company, Inc</p>
            </footer>
        </div>
    </app-footer>

    <script src=”https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js”></script>

    <script src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js”></script>
    <script>
        function sendEmail() {
            console.log('<?= $correo ?>');
            const emailValue = '<?= $correo ?>';
            const subject = "Asunto del correo";
            const body = "¡Bienvenido a MercadoFree! A continuación le dejamos el total de su compra. \nTotal: $ " + (<?= number_format($total + 20) ?>);

            const mailtoLink = `mailto:${emailValue}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

            window.open(mailtoLink, '_blank');
        }
    </script>
</body>