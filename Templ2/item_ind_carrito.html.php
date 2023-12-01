
<div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
    <div class="d-flex flex-row"><img class="rounded" src="<?=$carrito[$i]["ruta"]?>" width="40">
        <div class="ml-2"><span class="font-weight-bold d-block" style="font-size: 15px;"><?=$carrito[$i]["nombre"]?></span></div>
    </div>
    <div class="d-flex flex-row align-items-center"><span class="d-block" style="font-size: 15px;"><?=$carrito[$i]["cantidad"]?></span><span class="d-block ml-5 font-weight-bold" style="font-size: 15px;">$<?=$carrito[$i]["precio"]?></span><div onclick='del_carrito(<?=number_format($carrito[$i]["id"])?>)' style="cursor: pointer;"><i class="fa fa-trash-o ml-3 text-black-50" style="font-size: 20px;"></i></div></div>
</div>