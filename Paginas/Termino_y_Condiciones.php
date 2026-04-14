<?php ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Fashion Hair - Términos</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: "Segoe UI", Arial, sans-serif;
    background: #f6f6f6;
    height: 100vh;
}

.container {
    display: flex;
    height: 100%;
}

/* IZQUIERDA */
.left {
    width: 50%;
    background: #ffffff;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 80px;
}

/* TEXTO PRINCIPAL */
.title {
    font-size: 52px;
    font-weight: 700;
    color: #1e1e1e;
    line-height: 1.1;
}

.title span {
    color: #c0392b;
    display: block;
}

.desc {
    margin-top: 25px;
    color: #777;
    max-width: 420px;
    line-height: 1.5;
}

/* ICONOS */
.icons {
    display: flex;
    gap: 50px;
    margin-top: 60px;
}

.icon-box {
    text-align: center;
}

.icon-circle {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #c0392b;
    font-weight: bold;
    margin-bottom: 10px;
}

.icon-box p {
    font-size: 12px;
    color: #777;
    letter-spacing: 1px;
}

/* DERECHA */
.right {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* CARD */
.card {
    width: 460px;
    border-radius: 16px;
    background: white;
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
    overflow: hidden;
}

.card-header {
    background: #f3eaea;
    padding: 25px;
    text-align: center;
}

.card-header h2 {
    font-size: 22px;
    margin-bottom: 5px;
}

.card-header span {
    font-size: 13px;
    color: #777;
}

.card-body {
    padding: 20px;
    max-height: 320px;
    overflow-y: auto;
}

.card-body::-webkit-scrollbar {
    width: 6px;
}

.card-body::-webkit-scrollbar-thumb {
    background: #ddd;
    border-radius: 10px;
}

.item {
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
}

.num {
    min-width: 28px;
    height: 28px;
    border-radius: 8px;
    background: #fdecec;
    color: #c0392b;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
}

.content-title {
    font-weight: 600;
    font-size: 15px;
}

.content p {
    font-size: 13px;
    color: #777;
    margin-top: 5px;
}

.check {
    padding: 15px 20px;
    border-top: 1px solid #eee;
    font-size: 13px;
    color: #555;
}

.btn {
    width: 90%;
    margin: 10px auto 20px;
    display: block;
    padding: 14px;
    border-radius: 10px;
    border: none;
    background: #c0392b;
    color: white;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
}

.btn:hover {
    background: #a93226;
}
</style>

</head>
<body>

<div class="container">

    <!-- IZQUIERDA -->
    <div class="left">

        <!-- ❌ LOGO ELIMINADO -->

        <div class="title">
            Tu estilo,
            <span>nuestro compromiso.</span>
        </div>

        <div class="desc">
            Antes de comenzar tu transformación en Fashion Hair, por favor revisa y acepta nuestros lineamientos de servicio para garantizarte la mejor experiencia.
        </div>

        <div class="icons">
            <div class="icon-box">
                <div class="icon-circle">S</div>
                <p>SEGURO</p>
            </div>
            <div class="icon-box">
                <div class="icon-circle">P</div>
                <p>PERSONAL</p>
            </div>
            <div class="icon-box">
                <div class="icon-circle">T</div>
                <p>TRANSPARENTE</p>
            </div>
        </div>
    </div>

    <!-- DERECHA -->
    <div class="right">
        <div class="card">

            <div class="card-header">
                <h2>Términos y Condiciones</h2>
                <span>Última actualización: 24 de marzo de 2026</span>
            </div>

            <div class="card-body">

                <div class="item">
                    <div class="num">1</div>
                    <div class="content">
                        <div class="content-title">Aceptación del servicio</div>
                        <p>Al acceder a los servicios de Fashion Hair Barbería, usted acepta cumplir con estos términos.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="num">2</div>
                    <div class="content">
                        <div class="content-title">Política de citas y cancelaciones</div>
                        <p>Las citas deben confirmarse con anticipación. Cancelaciones sin previo aviso pueden generar cargos.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="num">3</div>
                    <div class="content">
                        <div class="content-title">Privacidad y datos personales</div>
                        <p>Su información personal se utiliza únicamente para la gestión de citas.</p>
                    </div>
                </div>

                <div class="item">
                    <div class="num">4</div>
                    <div class="content">
                        <div class="content-title">Responsabilidad del cliente</div>
                        <p>Debe informar sobre alergias o condiciones antes de cualquier tratamiento.</p>
                    </div>
                </div>

            </div>

            <div class="check">
                <input type="checkbox" id="c">
                <label for="c"> He leído y acepto los términos y condiciones de servicio.</label>
            </div>

            <button class="btn">Aceptar y continuar</button>

        </div>
    </div>

</div>

</body>
</html>
