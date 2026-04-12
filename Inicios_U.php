<?php
session_start();

$usuario = "Jose";
$citas = 6;
$estado = "Activo";
$cancelaciones = 0; 
?>

<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <title>Dashboard Cliente</title>
    <link rel="stylesheet" href="../Assets/css/Estilo_de_inicio_U.css">
</head>
<body>

<div class="dashboard">

    <div class="sidebar">
        <div class="logo">
            <img src="../Assets/img/imagen_logo.png" alt="Logo Fashion Hair">
            <h2>Fashion hair</h2>
        </div>

        <ul>
            <li class="activo">Inicio</li>
            <li>Galería</li>
            <li>Servicio</li>
            <li>Agendar Cita</li>
        </ul>

        <div class="info">
            <p>6340909168</p>
            <p>Calle 6 Ave. 3 y 4</p>
        </div>

        <div class="estado">
            <span>Estado de Barbería</span>
            <h3>ABIERTO</h3>
        </div>
    </div>

    <div class="contenido">

        <div class="header">
            <h2>BIENVENIDO</h2>
            <div class="user">
                👤 <?php echo $usuario; ?>
            </div>
        </div>

        <div class="cards">
            <div class="card">
                <p>TUS CITAS EN 6 MESES</p>
                <h1><?php echo $citas; ?></h1>
            </div>

            <div class="card">
                <p>ESTADO</p>
                <h1><?php echo $estado; ?></h1>
            </div>

            <div class="card">
                <p>TUS CANCELACIONES</p>
                <h1><?php echo $cancelaciones; ?></h1>
            </div>
        </div>

        <div class="tabla">
            <h3>Tus Citas</h3>

            <table>
                <tr>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Cliente</th>
                    <th>Servicio</th>
                    <th>Barbero</th>
                    <th>Estado</th>
                </tr>

                <tr>
                    <td>24 Octubre</td>
                    <td>10:30 AM</td>
                    <td>Carlos Mendoza</td>
                    <td>Corte Clásico + Barba</td>
                    <td>Mateo R</td>
                    <td><span class="confirmado">Confirmado</span></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="right">

        <div class="barberos">
            <h3>Barberos en turno</h3>

            <div class="barbero">
                <img src="../assets/img/barbero1.jpg" alt="Mateo Rodríguez">
                <p>Mateo Rodríguez</p>
            </div>

            <div class="barbero">
                <img src="img/barbero2.jpg">
                <p>Luis Paredes</p>
            </div>

            <div class="barbero">
                <img src="img/barbero3.jpg">
                <p>Santiago Ruiz</p>
            </div>
        </div>

        <div class="resenas">
            <h3>Reseñas</h3>
            <p>Positivas: 12/15</p>
            <p>Negativas: 2/10</p>
            <button>Enviar</button>
        </div>

    </div>

</div>

</body>
</html>