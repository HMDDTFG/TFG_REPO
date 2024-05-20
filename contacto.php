<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberSphere Technologies</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/ce9416b376.js" crossorigin="anonymous"></script>
    <script src="index.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
        <div class="cabecera">
        <i id="logo_user" class="fa-regular fa-user" style="color: white;"></i>
        <?php session_start();
            if (isset($_SESSION['id_usuario'])) {
                $username = htmlspecialchars($_SESSION['id_usuario'], ENT_QUOTES, 'UTF-8');
                echo "<a id=\"cab_usuario\" class=\"px-2\" href=\"micuenta.php\" style=\"color: #ffffff;\">$username</a>";
            } else {
                echo "<a id=\"cab_usuario\" class=\"px-2\" href=\"login.html\" style=\"color: #ffffff;\">Identifícate</a>";
            }
        ?>
    </div>
    <header class="subcabecera">
        <div id="sidebar" class="sidebar" style="width: 0px;">
            <a href="#" id="equis" class="boton-cerrar" onclick="ocultar()">×</a>
            <ul class="menu_opciones">
                <li><a class="titulo" id="botoninicio" href="index.php">INICIO</a></li>
                <li><a class="separacion"></a></li>
                <li><a class="titulo" id="botonquien" href="quiensomos.php">¿QUIÉNES SOMOS?</a></li>
                <li><a class="separacion"></a></li>
                <li><a class="titulo">PRODUCTOS</a></li>
                <li><a class="opciones" href="marcas.php">POR MARCAS</a></li>
                <li><a class="opciones" href="masprecio.php">MÁS CAROS</a></li>
                <li><a class="opciones" href="menosprecio.php">MÁS BARATOS</a></li>
                <li><a class="separacion"></a></li>
                <li><a class="titulo">AYUDA Y AJUSTES</a></li>
                <li><a class="opciones" href="micuenta.php">MI CUENTA</a></li>
                <li><a class="opciones" href="contacto.php">ATENCIÓN AL CLIENTE</a></li>
                <li><a class="opciones" href="login.html">IDENTIFICARSE</a></li>
                <li><a class="separacion"></a></li>
                <li><a class="titulo">ENCUENTRANOS AQUÍ</a></li>
                <img class="rrss" src="./img/instagram.png"><img id="twitter" class="rrss" src="./img/twitter.png">
            </ul>

        </div>
        <div id="overlay"></div>
        <div id="contenido" style="margin-left: 0px;">
            <div id="div_menu"><a id="abrir" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()"
                    style="display: inline;"><i id="menu" class="fa-solid fa-bars" style="color: rgb(5,47,64);"></i></a>
            </div>
        </div>
        <a id="cerrar" class="abrir-cerrar" href="#" onclick="ocultar()" style="display: none;">
        </a>
        <div id="logos"><img id="logo" src="./img/logo.png" alt="Logo empresa">
            <img id="nombre" src="./img/logo_nombre.png" alt="Nombre empresa">
        </div>
        <div id="div_cesta"><a href="cesta.html"><i id="cesta" class="fa-solid fa-cart-shopping"
                    style="color: rgb(5,47,64);"></i></a></div>
    </header>

    <div id="despegable">

    </div>

    <div id="fondo_contenido">
        <div id="container">
            <h1>ATENCIÓN AL CLIENTE</h1>
            <p class="parr_quien">Por favor, si tienes alguna duda o algún problema contacte con el siguiente teléfono:
            </p>
            <p class="parr_quien" id="telefono"><i class="fa-solid fa-mobile" style="color: #000000;"></i>&nbsp+34 697
                265 164</p>
            <p class="parr_quien" id="text_form">O en caso contrario, también disponemos de un formulario de contacto:
            </p>

            <form class="contactoform" action="enviar.php" method="post">
                <label for="nombre" class="text_formulario" id="primer_item">Nombre:&nbsp</label>
                <input type="text" id="nombre" name="nombre" required>
                <br><br>
                <label for="email" class="text_formulario">Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="email" id="email" name="email" required>
                <br><br>
                <label for="mensaje" class="text_formulario">Mensaje:&nbsp</label>
                <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
                <br><br>
                <input id="enviar_form" type="submit" value="Enviar">
            </form>

        </div>
    </div>




    <footer>
        <p>&copy; 2024 CyberSphere Technologies. David Díaz y Héctor Marín.</p>
    </footer>
</body>

</html>