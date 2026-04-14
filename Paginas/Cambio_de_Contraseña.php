<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="../../Assets/css/Estilo_de_Cambios.css">
    <link rel="stylesheet" href="../../Assets/css/Predeterminado.css">
</head>
<body>
<div class="container">
    <!-- Lado izquierdo con logo -->
    <div class="left-panel">
        <img src="../../Assets/img/Imagen_logo.png" alt="Logo Fashion Hair">
        <h1>Fashion Hair Barbería Unisex</h1>
    </div>

    <!-- Lado derecho con formulario -->
    <div class="right-panel">
        <h2>Ingrese su nueva contraseña</h2>
        <p>Inicia sesión en tu cuenta</p>

        <form action="procesar_reset.php" method="POST">
            <div class="input-group">
                <span class="icon">🔒</span>
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>

            <div class="input-group">
                <span class="icon">🔒</span>
                <input type="password" name="confirm_password" placeholder="Confirmar contraseña" required>
            </div>

            <div class="buttons">
                <a href="../../Paginas/Enviar_de_codigo.php" class="btn back">Atrás</a>
                <button type="submit" class="btn confirm">Confirmar</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>