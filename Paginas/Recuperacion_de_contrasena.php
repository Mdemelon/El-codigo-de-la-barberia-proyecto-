<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="../Assets/css/Estilo_de_recuperacion.css">
    <link rel="stylesheet" href ="../Assets/css/Predeterminado.css">
    <title>Sitio web </title>
</head>
<body>

<div class="rectangle">
    <div class="contenedor">

    <div class="lado-izquierdo">
        <img src="../Assets/img/Imagen_logo.png">
        <h1>Fashion hair</h1>
    </div>

    <div class="inicio-box">
       <p>Ingrese su correo para enviarle un codigo de verificacion </p>

       <form>
        
            <div class="Inget-group" >
                <span>✉️</span> <label for="correo">Correo</label>
                <input type="email" placeholder="Ejemplo1234@gmail.com" required>
            </div>

            <div class="botones">
                <button type="button" onclick="window.location.href='../Modulos/Usuarios/Registros_de_usuarios.php'">Atrás</button>
                <button type="button" onclick="window.location.href='Enviar_de_codigo.php'">Enviar</button>
            </div>


       </form>

    </div>
</div>
</div>
<div class="footer-line"></div>

</body>
</html>