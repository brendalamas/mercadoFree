<tr>
    <th scope="row" class="larger-font"><?= ($i + 1) ?></th>
    <td class="larger-font"><?= $productos[$i]['nombre'] ?></td>
    <td class="larger-font">$<?= number_format($productos[$i]['precio']) ?></td>
    <td></td>
    <td class="larger-font"><?= $productos[$i]['descripcion'] ?></td>
    <td class="larger-font"><?= $productos[$i]['cantidad'] ?></td>
    <td><img alt="<?= $productos[$i]['nombre'] ?>" width="80" height="80" src="<?= $productos[$i]['img'] ?>"></td>
    <td>
        <div class="wrapper d-flex justify-content-end">
            <a href="./add_edit.php?id_prod=<?= $productos[$i]['id_producto'] ?>">
                <button type="button" class="btn btn-outline-primary smaller-font ms-4">
                    <i class="fa fa-pencil-square-o" style="font-size: 20px;"></i>
                </button>
            </a>

            <form action="" method="post">
                <input type="hidden" name="eliminar[id_producto]" value="<?= $productos[$i]['id_producto'] ?>">
                <button type="submit" class="btn btn-outline-danger smaller-font ms-4" >
                    <i class="fa fa-trash" style="font-size: 20px;"></i>
                </button>
            </form>

        </div>
    </td>
</tr>




