<?php
session_start();

try {
    include __DIR__ . '/../include2/DatabaseConnection.php';
    include __DIR__ . '/../include2/Access_functions.php';
    
    if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
        IsLogged($pdo);
        //header('Location: index.php');
        //die();
        
	} 

    $productos = find300_productos($pdo);

    if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
        ob_start();
        include __DIR__ . '/../Templ2/Grilla_productos_L.html.php';
        $grilla = ob_get_clean();
        include __DIR__ . '/../Templ2/layout_inicio_L.html.php';
    } else {
        ob_start();
        include __DIR__ . '/../Templ2/Grilla_productos.html.php';
        $grilla = ob_get_clean();
        include __DIR__ . '/../Templ2/layout_inicio.html.php';
    }
	
	
} catch (PDOException $e) {

	echo ('Problema durante la consulta ' . $e);
}