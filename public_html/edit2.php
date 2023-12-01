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

    print_r($_POST);

    
	
	
} catch (PDOException $e) {

	echo ('Problema durante la consulta ' . $e);
}