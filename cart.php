<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>Carrito de la Compra</title>
</head>
<body>
    <div class="container">
        <h3>Compras:</h3>
        <?php
        session_start();
        // $_SESSION = [];
        // var_dump($_SESSION);
        if (!empty(($_SESSION['carrito']))) {
            foreach ($_SESSION['carrito'] as $key => $producto) {
                echo '<div class="cart-item">';
                echo '<img src="' . $producto["img"] . '">';
                echo '<div class="item-details">';
                echo '<p>' . $producto['name'] . '</p>';
                echo '<p>' . $producto['price'] . ' €</p>';
                echo '<p class="item-quantity">Cantidad: ' . $producto['cantidad'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p class="cart-empty">Carrito Vacío.</p>';
        }
        ?>
    </div>
</body>
</html>
