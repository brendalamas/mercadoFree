<?php
session_start();
//echo($_SESSION['user'] . ' ' . $_SESSION['password']);

try {
    include __DIR__ . '/../include2/DatabaseConnection.php';
    include __DIR__ . '/../include2/Access_functions.php';
	
    if (isset($_SESSION['user']) && isset($_SESSION['password'])) {
        IsLogged($pdo);
        header('Location: index.php');
        die();
        
	} elseif (isset($_POST['signin'])) {
        
        $user = $_POST['signin']['correo'];
        $contra = $_POST['signin']['password'];
        $tipo = 'clientes';

        if (isset($_POST['signin']['check_vendedor'])) {
            $tipo = 'vendedores';
        }
        
        //$errores = Authentification($pdo, $user, $contra);
        if (empty($user)) {
            $errores[] = 'El campo de email no puede quedar en blanco';
        } else {
            if (filter_var($user, FILTER_VALIDATE_EMAIL) == false) {
                $errores[] = 'Dirección inválida de email';
            } else {
                // convert the email to lowercase
                $user = strtolower($user);
                // Search for the lowercase version of $author['email']
                $usuario = findByID($pdo,$tipo,'correo',$user);

                if (empty($usuario)) {
                    $errores[] = 'Credenciales inválidas';
                } else {
                    if (!empty($contra)) {
                        if (!password_verify($contra,$usuario['passw'])) {
                            $errores[] = 'Credenciales inválidas';
                        } elseif (password_verify($contra,$usuario['passw'])) {
                            $_SESSION['user'] = $user;
                            $_SESSION['nombre'] = $usuario['nombre'];
                            $_SESSION['password'] = $usuario['passw'];
                            $_SESSION['tipo'] = $tipo;
                            if ($tipo == 'vendedores') {
                                $_SESSION['id_vendedor'] = $usuario['id_vendedor'];
                            } else {
                                $_SESSION['id'] = $usuario['id_cliente'];
                            }
                            header('location: index.php');
                            die();
                        }
                    } else {
                        $errores[] = 'Credenciales inválidas';
                    }
                }

            }
        }
        
        $num_errores = count($errores);
    
        $title='Ingreso usuario';
        ///////////////////////////////////////////////////////////////////////////////////
        include __DIR__ . '/../Templ2/login.html.php';
        ///////////////////////////////////////////////////////////////////////////////////
        
        
	} else {
        $title='Ingreso usuario';
        $errores = [];
        
        ///////////////////////////////////////////////////////////////////////////////////
        include __DIR__ . '/../Templ2/login.html.php';
        ///////////////////////////////////////////////////////////////////////////////////

		
	}
} catch (PDOException $e) {

	echo ('Problema durante la consulta ' . $e);
}
