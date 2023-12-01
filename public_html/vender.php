<?php
session_start();

try {
    include __DIR__ . '/../include2/DatabaseConnection.php';
    include __DIR__ . '/../include2/Access_functions.php';
    include __DIR__ . '/../include2/Meli_functions.php';

    
    if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
        IsLogged($pdo);
        //header('Location: index.php');
        //die();
        
	} 

    
    if (isset($_POST['producto'])) {  //Este formulario viene de add_edit.php

        if ($_POST['producto']['id_producto'] != '') {
            
            $producto = findByIdProd($pdo, $_POST['producto']['id_producto']);

            if ($producto['id_vendedor'] == $_SESSION['id_vendedor']) {
                
                //print_r($_POST['producto']);
                $producto = [
                    'id_producto' => $_POST['producto']['id_producto'],
                    'nombre' => $_POST['producto']['nombre'],
                    'cantidad' => $_POST['producto']['cantidad'],
                    'descripcion' => $_POST['producto']['descripcion'],
                    'id_vendedor' => $_SESSION['id_vendedor'],
                    'precio' => $_POST['producto']['precio']
                ];

                $imagen = [
                    'id_producto' => $_POST['producto']['id_producto'],
                    'ruta' => $_POST['producto']['imagen']
                ];

                Actualiz_prod($pdo, $producto, $imagen);

            }

        } else {
            
            $producto = [
                'nombre' => $_POST['producto']['nombre'],
                'cantidad' => $_POST['producto']['cantidad'],
                'descripcion' => $_POST['producto']['descripcion'],
                'id_vendedor' => $_SESSION['id_vendedor'],
                'precio' => $_POST['producto']['precio']
            ];

            $imagen = [
                'id_producto' => $_POST['producto']['id_producto'],
                'ruta' => $_POST['producto']['imagen']
            ];

            insert_product($pdo, $producto, $imagen);

        }
        
        
    } elseif (isset($_POST['eliminar'])) {
        
        $id_producto = $_POST['eliminar']['id_producto'];
        $producto = findByIdProd($pdo, $_POST['eliminar']['id_producto']);

            if ($producto['id_vendedor'] == $_SESSION['id_vendedor']) {
                
                delete_BD($pdo, 'productos', 'id_producto', $id_producto);

            }
    }

    $productos = find_prod_vende($pdo,$_SESSION['id_vendedor']);

    if (isset($_SESSION['user']) && isset($_SESSION['password']) && ($_SESSION['tipo']== 'vendedores')) {
        include __DIR__ . '/../Templ2/vender.html.php';
    } else {
        session_destroy();
        header('Location: index.php');
        die();
    }
	
	
} catch (PDOException $e) {

	echo ('Problema durante la consulta ' . $e);
}