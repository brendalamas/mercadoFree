<?php
session_start();
//print_r($_POST);

try {
    include __DIR__ . '/../include2/DatabaseConnection.php';
    include __DIR__ . '/../include2/Access_functions.php';
    include __DIR__ . '/../include2/Meli_functions.php';
	
    if (isset($_POST['signin'])) {
        
        //$tipo_vende= $_POST['signin']['check_vendedor'];

        $param = [
            'nombre' => $_POST['signin']['nombre'],
            'correo' => $_POST['signin']['correo'],
            'passw' => password_hash($_POST['signin']['password'], PASSWORD_DEFAULT)
        ];
        
        //$errores = Authentification($pdo, $user, $contra);
         
        if (isset($_POST['signin']['check_vendedor'])) {
            
            insert($pdo,'vendedores',$param);
            $titulo = "Registro exitoso";
            $mensaje= "Vendedor ingresado con éxito";
            
            include __DIR__ . '/../Templ2/pop_up_registro.html.php';
            
        }
        else {
            insert($pdo,'clientes',$param);
            $titulo = "Registro exitoso";
            $mensaje= "Cliente ingresado con éxito";
            
            include __DIR__ . '/../Templ2/pop_up_registro.html.php';
        }
        
        include __DIR__ . '/../Templ2/registro.html.php';
        
	} else {

        $modal = '';
        $footer_script = '';

        include __DIR__ . '/../Templ2/registro.html.php';
        
    }
} catch (PDOException $e) {

	echo ('Problema durante la consulta ' . $e);
}