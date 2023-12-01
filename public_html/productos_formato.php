<?php
session_start();
//print_r($_POST);

try {
    include __DIR__ . '/../include/DatabaseConnection.php';
    include __DIR__ . '/../include/Access_functions.php';
    include __DIR__ . '/../include/Meli_functions.php';
	
    $productos = find300_productos($pdo);
    //header('Content-Type: application/json; charset=utf-8');
   /* print('<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="HTML Masters">
        <title>Documento de ejemplo</title>
    </head>
    <pre> <br>');*/
    print('<pre> <br>');
    print(json_encode($productos));
    print('<br> </pre>');
    /*print('</pre>
    <br>
    </html>');*/
        
	
} catch (PDOException $e) {

	echo ('Problema durante la consulta ' . $e);
}