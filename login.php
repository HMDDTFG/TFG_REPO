<?php
include "login2.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberSphere Technologies</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/ce9416b376.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="index.js"></script>

</head>

<body>
    <div class="fondo_log">
        <div class="cabecera_log">
            <a href="index.php"><img class="logoemp" src="./img/logo.png"><img class="logonom" src="./img/logo_nombre.png"></a>
        </div>
        <div class="centro_log">
            <div class="cabecera_cen">

            </div>
            <div class="titulo_log">
                <h1 id="titlog">Iniciar sesión</h1>
            </div>
            <div class="divform_log">
                <div class="form_log">
                    <form action="login.php" method="post">
                        <label for="usuario">Usuario:</label>
                        <input type="text" id="usuario_login" name="usuario" required>
                        <br><br>
                        <label for="contraseña">Contraseña:</label>
                        <input type="password" id="contraseña_login" name="contraseña" required>
                        <br><br>
                        <input class="inputlog" type="submit" value="Iniciar Sesión">
                    </form>
                </div>
            </div>
            <div class="terms">
                <p class="termstexto">Al continuar, aceptas las Condiciones de uso y venta de CyberSphere Technologies. Consulta nuestro Aviso de privacidad, nuestro Aviso sobre cookies y nuestro Aviso sobre anuncios basados en intereses.</p>
            </div>
            <div class="help">
                <p class="termstexto"><a href="contacto.php">¿Necesitas ayuda? Contacta con nosotros aquí</a></p>
            </div>
        </div>
        <div class="eresnuevo">
            <p class="nuevotexto">¿Eres nuevo?</p>
        </div>
        <a href="registro.php"><div class="registroboton">
            <p class="textoregistro">Crea tu cuenta en CyberSphere aquí</p>
        </div></a>
    </div>




    <footer>
        <p>&copy; 2024 CyberSphere Technologies. David Díaz y Héctor Marín.</p>
    </footer>
</body>

</html>