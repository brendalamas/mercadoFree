<?php
session_start();

try {
    include __DIR__ . '/../include2/DatabaseConnection.php';
    include __DIR__ . '/../include2/Access_functions.php';
    include __DIR__ . '/../include2/Meli_functions.php';

    $id=$_GET['id_prod'];
	
    $producto = findByIdProd($pdo,$id);

    //print_r($producto);
    $title = $producto['nombre'];


    include __DIR__ . '/../Templ2/detalle_prod.html.php';
	
} catch (PDOException $e) {

	echo ('Problema durante la consulta ' . $e);
}