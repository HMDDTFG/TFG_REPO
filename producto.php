<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Verificar si se ha pasado un ID de producto en la URL
if (isset($_GET['id_producto'])) {
    $id = $_GET['id_producto'];

    // Consulta SQL para obtener los detalles del producto
    $sql = "SELECT nombre, descripcion, precio_ud, imagen, marca FROM PRODUCTO WHERE id_producto = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Verificar si se encontró el producto
    if ($stmt->rowCount() == 1) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $nombre = $row["nombre"];
        $descripcion = $row["descripcion"];
        $precio = number_format($row["precio_ud"], 2, '.', '');
        $imagen = $row["imagen"];
        $marca = $row["marca"];

        // Generar el HTML para mostrar los detalles del producto
        echo '<div class="producto-detalles">';
        echo '    <img class="img-fluid" src="' . $imagen . '">';
        echo '    <h1>' . $nombre . '</h1>';
        echo '    <p>' . $descripcion . '</p>';
        echo '    <p>Marca: ' . $marca . '</p>';
        echo '    <p>Precio: ' . $precio . '€</p>';
        echo '</div>';
    } else {
        echo "Producto no encontrado.";
    }
} else {
    echo "ID de producto no especificado.";
}

// Cerrar la conexión
$conn = null;
?>
