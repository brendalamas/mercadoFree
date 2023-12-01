<?php
header("Access-Control-Allow-Origin: *"); // Esto permite cualquier origen. Para mayor seguridad, puedes especificar el origen de tu aplicación.
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
session_start();
//print_r($_POST);

try {
    include __DIR__ . '/../include2/DatabaseConnection.php';
    include __DIR__ . '/../include2/Access_functions.php';
    include __DIR__ . '/../include2/Meli_functions.php';

    if (isset($_GET)) {
        $Id_producto = $_GET['id_producto'];
        $producto = findById($pdo,'productos','id_producto',$Id_producto);
    } else {
        $producto = [];
    }
	
    print_r(json_encode($producto));
        
	
} catch (PDOException $e) {

	echo ('Problema durante la consulta ' . $e);
}