<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Términos y Condiciones - Fashion Hair</title>
    <style>
        /* Reset y Base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #f7f7f7;
            display: flex;
            min-height: 100vh;
            color: #333;
        }

        .container {
            display: flex;
            width: 100%;
            max-width: 1400px;
            margin: auto;
            padding: 40px;
            align-items: center;
        }

        /* Sección Izquierda */
        .hero-section {
            flex: 1;
            padding-right: 50px;
        }

        .hero-section h1 {
            font-size: 64px;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            color: #1a1a1a;
        }

        .hero-section h1 span {
            color: #c43e2b;
        }

        .hero-section p {
            font-size: 18px;
            color: #777;
            line-height: 1.6;
            margin-bottom: 50px;
            max-width: 500px;
        }

        .features {
            display: flex;
            gap: 40px;
        }

        .feature-item {
            text-align: center;
        }

        .circle-icon {
            width: 60px;
            height: 60px;
            border: 1px solid #e0e0e0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 20px;
            color: #c43e2b;
            background: white;
            margin-bottom: 15px;
        }

        .feature-label {
            font-size: 12px;
            letter-spacing: 1.5px;
            color: #888;
            text-transform: uppercase;
        }

        /* Sección Derecha (Card) */
        .card-container {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .card {
            background: white;
            width: 100%;
            max-width: 480px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .card-header {
            background-color: #fdf2f1;
            padding: 40px 30px 20px;
            text-align: center;
        }

        .card-header h2 {
            font-size: 28px;
            margin-bottom: 8px;
            color: #1a1a1a;
        }

        .card-header p {
            font-size: 14px;
            color: #999;
        }

        .card-body {
            padding: 20px 30px;
            max-height: 400px;
            overflow-y: auto;
        }

        .term-item {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }

        .term-number {
            background: #fdf2f1;
            color: #c43e2b;
            width: 32px;
            height: 32px;
            min-width: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }

        .term-content h3 {
            font-size: 16px;
            margin-bottom: 5px;
            color: #222;
        }

        .term-content p {
            font-size: 14px;
            color: #777;
            line-height: 1.4;
        }

        .card-footer {
            padding: 20px 30px 40px;
            border-top: 1px solid #f0f0f0;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #555;
            margin-bottom: 25px;
            cursor: pointer;
        }

        .btn-submit {
            width: 100%;
            background-color: #c43e2b;
            color: white;
            border: none;
            padding: 16px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #a33324;
        }

        /* Scrollbar personalizado */
        .card-body::-webkit-scrollbar {
            width: 6px;
        }
        .card-body::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .card-body::-webkit-scrollbar-thumb {
            background: #ddd;
            border-radius: 10px;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .container {
                flex-direction: column;
                padding: 20px;
            }
            .hero-section {
                padding-right: 0;
                margin-bottom: 50px;
                text-align: center;
            }
            .hero-section p {
                margin-left: auto;
                margin-right: auto;
            }
            .features {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="hero-section">
        <h1>Tu estilo,<br><span>nuestro compromiso.</span></h1>
        <p>Antes de comenzar tu transformación en Fashion Hair, por favor revisa y acepta nuestros lineamientos de servicio para garantizarte la mejor experiencia.</p>
        
        <div class="features">
            <div class="feature-item">
                <div class="circle-icon">S</div>
                <div class="feature-label">Seguro</div>
            </div>
            <div class="feature-item">
                <div class="circle-icon">P</div>
                <div class="feature-label">Personal</div>
            </div>
            <div class="feature-item">
                <div class="circle-icon">T</div>
                <div class="feature-label">Transparente</div>
            </div>
        </div>
    </div>

    <div class="card-container">
        <form class="card" method="POST" action="">
            <div class="card-header">
                <h2>Términos y Condiciones</h2>
                <p>Última actualización: 24 de marzo de 2026</p>
            </div>

            <div class="card-body">
                <div class="term-item">
                    <div class="term-number">1</div>
                    <div class="term-content">
                        <h3>Aceptación del servicio</h3>
                        <p>Al acceder a los servicios de Fashion Hair Barbería, usted acepta cumplir con estos términos.</p>
                    </div>
                </div>

                <div class="term-item">
                    <div class="term-number">2</div>
                    <div class="term-content">
                        <h3>Política de citas y cancelaciones</h3>
                        <p>Las citas deben confirmarse con anticipación. Cancelaciones sin previo aviso pueden generar cargos.</p>
                    </div>
                </div>

                <div class="term-item">
                    <div class="term-number">3</div>
                    <div class="term-content">
                        <h3>Privacidad y datos personales</h3>
                        <p>Su información personal se utiliza únicamente para la gestión de citas.</p>
                    </div>
                </div>

                <div class="term-item">
                    <div class="term-number">4</div>
                    <div class="term-content">
                        <h3>Responsabilidad del cliente</h3>
                        <p>Debe informar sobre alergias o condiciones antes de cualquier tratamiento.</p>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <label class="checkbox-container">
                    <input type="checkbox" name="acepto" required>
                    He leído y acepto los términos y condiciones de servicio.
                </label>
                <button type="submit" class="btn-submit">Aceptar y continuar</button>
            </div>
        </form>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['acepto'])) {
        echo "<script>alert('¡Gracias! Has aceptado los términos.');</script>";
    }
}
?>

</body>
</html>
