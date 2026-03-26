<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="/Assets/css/Estilo_de_Inicio.css">
    <link rel="stylesheet" href ="/Assets/css/Predeterminado.css">
    <title>Sitio web </title>
</head>
<body>
<div class="rectangle">
    <div class="contenedor">
    <!-- Parte de la imagen del logo de la barberia y el nombre de la barberia  -->
    <div class="lado-izquierdo">
        <img src="/Assets/img/Imagen_logo.png" alt="Fashion Hair">
        <h1>Fashion hair</h1>
    </div>

    <!-- El formulario con Bienvenido para el inicio de sesion con el correo y Contraseña -->
    <div class="ininio-box">
        <h2>Bienvenido de nuevo</h2>
        <p>Inicia sesión en tu cuenta</p>

        <form action="validar.php" method="POST">
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="password" name="password" placeholder="Contraseña" required>
             <p><a href="/Paginas/Recuperacion_de_contrasena.php">¿Olvidates tu Contraseña?</a></p>
            <button type="submit">Iniciar Sesión</button>
        </form>
        
        <p>¿No tienes una cuenta? <a href ="Registros_de_usuarios.php">Regístrate</a></p>

    </div>

</div>
</div>

<div class="footer-line"></div>

</body>
</html>