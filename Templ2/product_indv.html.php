<!-- Single Product -->
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 mb-5">
    <a href="./detalle_prod.php?id_prod=<?= $productos[$i]['id'] ?>">
        <div class="nav-link d-flex flex-row flex-wrap justify-content-center align-content-center">
            <div class="card shadow p-3 mb-5 rounded border border-0">
                <div class="card-header m-0 p-0 border border-0 bg-red">
                    <picture style="width: 100%; height: auto;"><img style="width: 100%;" src="<?= $productos[$i]['img'] ?>" alt="<?= $productos[$i]['name'] ?>">
                    </picture>
                </div>
                <div class="card-body">
                    <a href="./detalle_prod.php?id_prod=<?= $productos[$i]['id'] ?>" style="text-decoration: none;">
                        <h5 class="card-title" style="color: #212509; font-size: 12.5px; font-family: Roboto, Helvetica Neue', sans-serif;"><?= $productos[$i]['name'] ?></h5>
                    </a>
                    <h2 class="mt-4">$<?= number_format($productos[$i]['price']) ?></h2>
                </div>
                <div class="card-footer m-0 p-0 border border-0 bg-transparent position-relative">
                    <button type="button" class="btn btn-outline-light p-1 m-0 border border-0 position-absolute check-icon"><i class="fa-regular fa-solid fa-cart-plus"></i></button>
                </div>
            </div>
        </div>
    </a>
</div>