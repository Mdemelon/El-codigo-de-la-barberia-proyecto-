<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="../Assets/css/Estilo_de_verificacion.css">
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
        <p>Ingrese el codigo de varificacion</p>
        <form action="/Config/Validacion_de_codigo.php" method="post">
            <div class="code-inputs">
                <input type="text" name="digit1" maxlength="1" required>
                <input type="text" name="digit2" maxlength="1" required>
                <input type="text" name="digit3" maxlength="1" required>
                <input type="text" name="digit4" maxlength="1" required>
                <input type="text" name="digit5" maxlength="1" required>
                <input type="text" name="digit6" maxlength="1" required>
            </div>
            <div class="botones">
                <button type="button" onclick="window.history.back()">Atras</button>
                <button type="submit" >Enviar</button>

            </div>
        
        </form>
    </div>
    </div>
    
<div class="footer-line"></div>

</body>
</html>