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

    if (isset($_GET['id_prod'])) {
        
        if ($_SESSION['tipo']== 'vendedores') {

            $id_prod = $_GET['id_prod'];

            $producto = findByIdProd($pdo,$id_prod);

            $title = "Editar " . $producto['nombre'];
            
            if ($producto['id_vendedor'] == $_SESSION['id_vendedor']) {
                include __DIR__ . '/../Templ2/add_edit.html.php';
            } else {
                session_destroy();
                header('Location: index.php');
                die();
                echo (" Espacio ");
                echo($producto['id_vendedor']);
            }

        }
        
    } else {
        
        if ($_SESSION['tipo']== 'vendedores') {

            include __DIR__ . '/../Templ2/add_edit.html.php';

        }
    }

    
	
	
} catch (PDOException $e) {

	echo ('Problema durante la consulta ' . $e);
}