<div class="row" >
    <div class="col-lg-2">
        <aside class="bg-light">
            <div class="pt-5 pb-2 w-100 d-flex flex-column text-light justify-content-center">
                <div class="d-flex flex-column mx-3 publicity">
                    <p>CELULARES</p>
                    <h2>HASTA 6 CUOTAS SIN INTERÉS</h2>
                </div>
                <picture style="width: 100%; height: auto;"><img src="./img2/celularesOferta.jpg" alt="" width="100%"></picture>
                <div class="d-flex mx-auto mt-3 mb-3"><button type="button" class="btn btn-primary btn-lg">Ver Ofertas</button></div>
            </div>
            <hr>
            <div class="pt-3 pb-5 w-100 h-50 d-flex flex-column justify-content-center">
                <div class="d-flex mx-2 px-2 mt-3 mb-2 payment-methods">
                    <h5>Medios de Pago</h5>
                </div>
                <div class="payment-methods"><button type="button" class="btn btn-success bt-lg word-wrap px-2 mx-3 d-flex align-content-center">
                        <p class="text-light fw-bold lh-base"><i class="fa-regular fa-credit-card"></i> ¿Pagá el mismo precio en hasta 6 cuotas! </p>
                    </button>
                    <div class="d-flex mx-2 mt-3 px-2 payment-methods">
                        <p>Hasta en 12 cuotas sin tarjeta</p>
                    </div>
                    <div class="d-flex mx-2 px-2 payment-methods">
                        <picture><img src="./img2/mercado-credito-pay.svg" alt="" width="40%"></picture>
                    </div>
                    <div class="d-flex mx-2 mt-3 px-2 payment-methods">
                        <p>Tarjetas de crédito</p>
                    </div>
                    <div class="d-flex mx-2 px-2 payment-methods">
                        <ul class="d-flex flex-row justify-content-between">
                            <li>
                                <picture><img src="./img2/visa-pay.svg" alt="" width="80%"></picture>
                            </li>
                            <li>
                                <picture><img src="./img2/amex-pay.svg" alt="" width="80%"></picture>
                            </li>
                            <li>
                                <picture><img src="./img2/naranja-pay.svg" alt="" width="80%"></picture>
                            </li>
                            <li>
                                <picture><img src="./img2/master-pay.svg" alt="" width="80%"></picture>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex mx-2 mt-3 px-2 payment-methods">
                        <p>Tarjetas de débito</p>
                    </div>
                    <div class="d-flex mx-2 px-2 payment-methods">
                        <ul class="d-flex flex-row justify-content-between">
                            <li>
                                <picture><img src="./img2/visadebito-pay.svg" alt="" width="80%"></picture>
                            </li>
                            <li>
                                <picture><img src="./img2/maestro-pay.svg" alt="" width="80%"></picture>
                            </li>
                            <li>
                                <picture><img src="./img2/maestrodebito-pay.svg" alt="" width="80%"></picture>
                            </li>
                            <li>
                                <picture><img src="./img2/cabal-pay.svg" alt="" width="80%"></picture>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex mx-2 mt-3 px-2 payment-methods">
                        <p>Efectivo</p>
                    </div>
                    <div class="d-flex mx-2 px-2 payment-methods">
                        <ul class="d-flex flex-row justify-content-between">
                            <li>
                                <picture><img src="./img2/pagofacil-pay.svg" alt="" width="80%"></picture>
                            </li>
                            <li>
                                <picture><img src="./img2/rapipago-pay.svg" alt="" width="80%"></picture>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex mx-2 mt-3 px-2 payment-methods"><a href="#">Conocé otros medios de pago</a></div>
                </div>
            </div>
        </aside>
    </div>
    <div class="col-lg-10" id="grilla"><app-products _nghost-ng-c558201994=""><app-cart _ngcontent-ng-c558201994="" _nghost-ng-c2504440764="">
                <div tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" class="offcanvas offcanvas-end">
                    <div class="offcanvas-header">
                        <div class="container d-flex justify-content-between">
                            <div><i class="fa-solid fa-cart-shopping"></i><span class="badge rounded-pill text-bg-primary">0</span></div>
                            <div><span class="total-cart-price">Total: $ 0.00</span></div>
                        </div><button type="button" data-bs-dismiss="offcanvas" aria-label="Close" class="btn-close"></button>
                    </div>
                    <div class="offcanvas-body container-fluid d-flex flex-column justify-content-start align-self-center">
                        <table class="table align-middle table-hover table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th></th>
                                    <th scope="col"></th>
                                    <th></th>
                                    <th scope="col"></th>
                                    <th></th>
                                    <th scope="col"></th>
                                    <th></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody><!--bindings={
  "ng-reflect-ng-for-of": ""
}--></tbody>
                        </table>
                    </div>
                    <div class="offcanvas-footer">
                        <div class="container d-flex justify-content-center py-5"><a target="_blank" rel="noopener noreferrer" type="button" class="cart__checkout-button" href="https://wa.me/5493515555555?text=Quiero%20que%20me%20contacten%20por%3A%20%0A%0ATotal%3A%20%240">
                                Envíamelo por WhatsApp <i class="fa-brands fa-whatsapp fa-xl ps-3"></i></a></div>
                    </div>
                </div>
            </app-cart>
            <section _ngcontent-ng-c558201994="" id="products">
                <div _ngcontent-ng-c558201994="" class="container px-3 py-5 pt-5">
                    <div _ngcontent-ng-c558201994="" class="row align-items-center justify-content-evenly">

                        <?php
                        for ($i = 0; $i < count($productos); $i++) {
                            include __DIR__ . '/../Templ2/product_indv_L.html.php';
                        }
                        ?>

                    </div>
                </div>
            </section>
    </div>