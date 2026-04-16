<?php ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Cita - Fashion Hair</title>
    <link rel="stylesheet" href="CSS/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Estilo_de_bienvenoda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --panel-blue: #1b2f84;
            --panel-red: #d91f4e;
            --page-bg: #f4f6fb;
            --panel-border: #e8ebf4;
            --panel-text: #1f2937;
            --panel-muted: #6b7280;
            --panel-shadow: 0 18px 38px rgba(31, 41, 55, 0.08);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            color: var(--panel-text);
            background:
                radial-gradient(circle at top left, rgba(27, 47, 132, 0.08), transparent 24%),
                radial-gradient(circle at bottom right, rgba(217, 31, 78, 0.08), transparent 22%),
                var(--page-bg);
        }

        .dashboard-shell {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 290px 1fr;
        }

        .dashboard-sidebar {
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(10px);
            border-right: 1px solid var(--panel-border);
            padding: 26px 20px;
            display: flex;
            flex-direction: column;
            gap: 22px;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 18px;
            border-bottom: 1px solid var(--panel-border);
            text-decoration: none;
        }

        .sidebar-brand img {
            width: 58px;
            height: 58px;
            object-fit: contain;
        }

        .sidebar-brand .main {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 1.85rem;
            font-weight: 900;
            color: var(--rojo);
            line-height: 1;
        }

        .sidebar-brand .sub {
            display: inline-block;
            margin-top: 6px;
            padding: 4px 10px;
            border: 1px solid #cdd5f6;
            border-radius: 999px;
            color: var(--panel-blue);
            font-size: .72rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .05em;
        }

        .sidebar-title {
            font-size: 1.6rem;
            font-weight: 900;
            letter-spacing: .04em;
            text-transform: uppercase;
            margin: 0;
        }

        .sidebar-nav {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .sidebar-nav a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            border-radius: 14px;
            color: #374151;
            text-decoration: none;
            font-weight: 800;
            transition: .25s ease;
        }

        .sidebar-nav a.active,
        .sidebar-nav a:hover {
            background: var(--panel-blue);
            color: #ffffff;
            box-shadow: 0 12px 24px rgba(27, 47, 132, 0.18);
        }

        .sidebar-nav a i {
            width: 18px;
            text-align: center;
        }

        .sidebar-card {
            margin-top: auto;
            padding: 18px;
            border-radius: 18px;
            background: #ffffff;
            border: 1px solid var(--panel-border);
        }

        .sidebar-card h3 {
            margin: 0 0 12px;
            font-size: 1rem;
            font-weight: 900;
            text-transform: uppercase;
        }

        .sidebar-card p {
            margin: 0;
            color: var(--panel-muted);
            line-height: 1.7;
            font-size: .94rem;
        }

        .status-card {
            margin-top: 18px;
            border-radius: 18px;
            padding: 16px;
            background: linear-gradient(135deg, #d91f4e, #b81640);
            color: #ffffff;
            box-shadow: 0 16px 34px rgba(217, 31, 78, 0.24);
        }

        .status-card small { display: block; margin-bottom: 6px; opacity: .9; }
        .status-card strong { display: block; font-size: 1.45rem; }

        .dashboard-main {
            padding: 20px 22px 28px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 18px;
        }

        .panel-chip {
            padding: 6px 14px;
            border: 1px solid var(--panel-blue);
            border-radius: 999px;
            color: var(--panel-blue);
            font-size: .75rem;
            font-weight: 900;
            text-transform: uppercase;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .icon-badge,
        .avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: #ffffff;
            border: 1px solid var(--panel-border);
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .icon-badge {
            color: #4b5563;
            position: relative;
        }

        .icon-badge::after {
            content: "";
            position: absolute;
            top: 10px;
            right: 10px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #ef4444;
        }

        .avatar {
            color: var(--panel-blue);
            font-weight: 900;
        }

        .surface-card {
            background: rgba(255, 255, 255, 0.78);
            border: 1px solid rgba(232, 235, 244, 0.9);
            border-radius: 28px;
            padding: 22px;
            box-shadow: var(--panel-shadow);
        }

        .booking-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 16px;
            margin-bottom: 22px;
        }

        .booking-header h1 {
            margin: 0 0 6px;
            font-size: 2.2rem;
            font-weight: 900;
            text-transform: uppercase;
        }

        .booking-header p {
            margin: 0;
            color: var(--panel-muted);
            font-size: 1rem;
        }

        .header-note {
            padding: 10px 14px;
            border-radius: 14px;
            background: #eef2ff;
            color: var(--panel-blue);
            font-size: .82rem;
            font-weight: 900;
            text-transform: uppercase;
        }

        .booking-grid {
            display: grid;
            grid-template-columns: 280px minmax(0, 1fr);
            gap: 18px;
        }

        .info-panel,
        .form-panel {
            background: #ffffff;
            border: 1px solid var(--panel-border);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 10px 24px rgba(17, 24, 39, 0.04);
        }

        .info-panel h2,
        .form-panel h2 {
            margin: 0 0 14px;
            font-size: 1.1rem;
            font-weight: 900;
            text-transform: uppercase;
        }

        .info-panel p {
            color: var(--panel-muted);
            line-height: 1.8;
            margin: 0 0 16px;
        }

        .info-list {
            display: grid;
            gap: 12px;
        }

        .info-item {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            padding: 12px;
            border-radius: 14px;
            background: #f8fafc;
        }

        .info-item i {
            width: 36px;
            height: 36px;
            border-radius: 12px;
            background: var(--panel-blue);
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .info-item strong {
            display: block;
            margin-bottom: 4px;
            font-size: .94rem;
        }

        .info-item span {
            color: var(--panel-muted);
            font-size: .9rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: .9rem;
            font-weight: 900;
            color: #374151;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid var(--panel-border);
            border-radius: 14px;
            background: #ffffff;
            color: #111827;
            outline: none;
            transition: border-color .2s ease, box-shadow .2s ease;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #b8c4f5;
            box-shadow: 0 0 0 4px rgba(27, 47, 132, 0.08);
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            gap: 14px;
            margin-top: 10px;
        }

        .btn-action {
            padding: 13px 22px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 900;
            border: 1px solid transparent;
            cursor: pointer;
        }

        .btn-cancel {
            background: transparent;
            color: var(--panel-red);
            border-color: rgba(217, 31, 78, 0.35);
        }

        .btn-submit {
            background: var(--panel-blue);
            color: #ffffff;
            box-shadow: 0 14px 24px rgba(27, 47, 132, 0.18);
        }

        footer {
            padding: 18px 10px 4px;
            text-align: center;
            color: #6b7280;
            font-size: .9rem;
        }

        @media (max-width: 1080px) {
            .booking-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 940px) {
            .dashboard-shell {
                grid-template-columns: 1fr;
            }

            .dashboard-sidebar {
                border-right: 0;
                border-bottom: 1px solid var(--panel-border);
            }
        }

        @media (max-width: 720px) {
            .dashboard-main {
                padding: 16px;
            }

            .topbar,
            .booking-header,
            .actions {
                flex-direction: column;
                align-items: stretch;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-shell">
        <aside class="dashboard-sidebar">
            <a href="Bienvenida.php" class="sidebar-brand">
                <img src="img/Imagen_logo.png" alt="Logo Fashion Hair">
                <div>
                    <span class="main">Fashion Hair</span>
                    <span class="sub">Panel administrador</span>
                </div>
            </a>

            <h2 class="sidebar-title">Menu Principal</h2>

            <nav class="sidebar-nav">
                <a href="Bienvenida.php"><i class="fas fa-house"></i><span>Inicio</span></a>
                <a href="galeria.php"><i class="fas fa-images"></i><span>Galeria</span></a>
                <a href="servicios.php"><i class="fas fa-store"></i><span>Servicio</span></a>
                <a href="agendarcita.php" class="active"><i class="fas fa-calendar-check"></i><span>Agendar Cita</span></a>
                <a href="#"><i class="fas fa-sliders"></i><span>Sistema</span></a>
            </nav>

            <div class="sidebar-card">
                <h3>Agenda diaria</h3>
                <p>Organiza nuevas reservas, asigna servicio y barbero, y manten claro el flujo de clientes del dia.</p>

                <div class="status-card">
                    <small>Estado de Barberia</small>
                    <strong>ABIERTO</strong>
                </div>
            </div>
        </aside>

        <main class="dashboard-main">
            <div class="topbar">
                <div><span class="panel-chip">Panel administrador</span></div>

                <div class="topbar-right">
                    <span class="icon-badge"><i class="fas fa-bell"></i></span>
                    <span class="avatar">FH</span>
                </div>
            </div>

            <section class="surface-card">
                <div class="booking-header">
                    <div>
                        <h1>Agregar una cita</h1>
                        <p>Gestiona las reservas del dia y registra una nueva cita con todos los detalles necesarios.</p>
                    </div>

                    <div class="header-note">Reserva activa</div>
                </div>

                <div class="booking-grid">
                    <aside class="info-panel">
                        <h2>Resumen rapido</h2>
                        <p>Completa la informacion del cliente y asigna correctamente el servicio para evitar cruces de horario.</p>

                        <div class="info-list">
                            <div class="info-item">
                                <i class="fas fa-user"></i>
                                <div>
                                    <strong>Cliente identificado</strong>
                                    <span>Registra nombre completo y notas importantes.</span>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="fas fa-scissors"></i>
                                <div>
                                    <strong>Servicio asignado</strong>
                                    <span>Selecciona el servicio segun la solicitud del cliente.</span>
                                </div>
                            </div>

                            <div class="info-item">
                                <i class="fas fa-clock"></i>
                                <div>
                                    <strong>Horario controlado</strong>
                                    <span>Define fecha y hora para mantener el flujo ordenado.</span>
                                </div>
                            </div>
                        </div>
                    </aside>

                    <div class="form-panel">
                        <h2>Formulario de cita</h2>

                        <form>
                            <div class="form-grid">
                                <div class="form-group full">
                                    <label for="nombre">Nombre completo</label>
                                    <input type="text" id="nombre" placeholder="Ingresa el nombre del cliente">
                                </div>

                                <div class="form-group">
                                    <label for="servicio">Seleccionar servicio</label>
                                    <select id="servicio">
                                        <option>- Ninguno -</option>
                                        <option>Corte clasico</option>
                                        <option>Corte + barba</option>
                                        <option>Afeitado tradicional</option>
                                        <option>Color y corte</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="barbero">Seleccionar barbero</label>
                                    <select id="barbero">
                                        <option>- Ninguno -</option>
                                        <option>Juan</option>
                                        <option>Pedro</option>
                                        <option>Mateo</option>
                                        <option>Luis</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="fecha">Fecha de la cita</label>
                                    <input type="date" id="fecha">
                                </div>

                                <div class="form-group">
                                    <label for="hora">Hora de la cita</label>
                                    <input type="time" id="hora">
                                </div>

                                <div class="form-group full">
                                    <label for="notas">Notas adicionales</label>
                                    <textarea id="notas" placeholder="Escribe observaciones, preferencias o indicaciones del cliente"></textarea>
                                </div>
                            </div>

                            <div class="actions">
                                <a href="servicios.php" class="btn-action btn-cancel">Cancelar</a>
                                <button type="submit" class="btn-action btn-submit">Confirmar cita</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <footer>
                &copy; <?php echo date('Y'); ?> Fashion Hair | Agenda visual alineada con servicios y galeria
            </footer>
        </main>
    </div>
</body>
</html>
