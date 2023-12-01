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
                    <div style="display: inline-flex; width: 100%; align-items: center; justify-content: space-between;" class="container_div_car">
                        <div class="div_car">
                            <h2 class="mt-4">$<?= number_format($productos[$i]['price']) ?></h2>
                        </div>

                        <?php if (($_SESSION['tipo'] == 'clientes')) {
                        ?>
                            <div class="div_car2" style="cursor: pointer" onclick="add_carrito(<?= $productos[$i]['id'] ?>,1)">
                                <i style="font-size:24px;" class="fa">&#xf217;</i>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </a>
</div>