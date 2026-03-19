<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "/Assets/css/Estilo_de_Inicio.css">
    <title>Sitio web </title>
</head>
<body>
    <div class="contenedor">
        <img src="/Assets/img/Imagen_logo.png" alt="Farhion hair">
        <h1>Fashion hair</h1>
    </div>

    <div class="ininio-box">
        <h2>Bienvenido de nuevo</h2>
        <p> Crea tu cuenta en Fashion hair</p>

        <form action="validar.php" method="POST">
            <input type="text" name="Nombre" placeholder="Nombre" required>
            <input type="tel" name="Telefono" placeholder="Telefono" required>
            <input type="email" name="correo" placeholder="Correo" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="password " name="Confirm the password" placeholder=" Confirmar la Contraseña" required>

            <label>
                <input type="checkbox" id="Terminos"required>
                acepto los <a href="Termino_y_Condiciones.php" terget="Estilo_de_Inicio">Terminos y condiciones</a>
            </label>

            <button type="submit">Crear Cuenta</button>
        </form>

        <p>¿Ya cuentas con una cuenta? <a href="Inicio.php">Inicia secion</a></p>
    </div>

</body>
</html>