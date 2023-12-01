<?php
session_start();

try {
    include __DIR__ . '/../include2/DatabaseConnection.php';
    include __DIR__ . '/../include2/Access_functions.php';
    include __DIR__ . '/../include2/Meli_functions.php';

    // Check if the search parameter is set
    if (isset($_GET['search'])) {
        $searchTerm = $_GET['search'];

        // Modify the function to include a search parameter and handle errors
        $productos = searchProductos($pdo, $searchTerm);

        // Check if there are results
        if (!empty($productos)) {
            // Output the results as JSON
            echo json_encode(["success" => true, "data" => $productos]);

            // Set $_SESSION['resultadosBusqueda'] as true
            $_SESSION['resultadosBusqueda'] = true;
        } else {
            // Display a message when no products are found
            echo json_encode(["success" => false, "message" => "No hay productos relacionados con tu búsqueda"]);
        }
    } else {
        // Handle the case when the search parameter is not set
        echo json_encode(["success" => false, "message" => "No se proporcionó un término de búsqueda."]);
    }

} catch (PDOException $e) {
    // Handle the database connection error
    echo json_encode(["success" => false, "error" => "Problema durante la consulta " . $e->getMessage()]);
}

function searchProductos($pdo, $searchTerm) {
    $sql = 'SELECT productos.id_producto, productos.nombre, productos.precio, productos.descripcion, productos.cantidad, imagenes.ruta AS img FROM `productos` JOIN imagenes ON productos.id_producto = imagenes.id_producto WHERE productos.nombre LIKE :searchTerm';
    $parameters = ['searchTerm' => '%' . $searchTerm . '%'];

    $result = query($pdo, $sql, $parameters);

    return $result->fetchAll(PDO::FETCH_ASSOC);
}
?>
