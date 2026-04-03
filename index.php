<?php
session_start();

if (isset($_SESSION['usuario_id'])) {
    header("Location: juego.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Evil: Trivia Survival</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <div class="efecto-crt"></div>

    <div id="pantalla-seleccion" class="fase-contenedor pantalla-activa">
        <h2 style="color: #8b0000; text-shadow: 2px 2px 0px #000; font-size: 28px;">SELECCIONA TU SUPERVIVIENTE</h2>
        <div class="grid-personajes">
            <div class="carta-personaje" onclick="elegirPersonaje('leon', 'LEON S. KENNEDY', './img/leon.png')">
                LEON S. KENNEDY <br><span style="font-size: 12px; color: #aaa;">(1 pista extra)</span>
            </div>
            <div class="carta-personaje" onclick="elegirPersonaje('chris', 'CHRIS REDFIELD', './img/chris.png')">
                CHRIS REDFIELD <br><span style="font-size: 12px; color: #aaa;">(+1 resistencia)</span>
            </div>
            <div class="carta-personaje" onclick="elegirPersonaje('jill', 'JILL VALENTINE', './img/jill.png')">
                JILL VALENTINE <br><span style="font-size: 12px; color: #aaa;">(+1 espacio inicial)</span>
            </div>
            <div class="carta-personaje" onclick="elegirPersonaje('claire', 'CLAIRE REDFIELD', './img/claire.png')">
                CLAIRE REDFIELD <br><span style="font-size: 12px; color: #aaa;">(Cambio rápido)</span>
            </div>
        </div>
    </div>

    <div id="pantalla-aviso" class="fase-contenedor pantalla-oculta">
        <div class="menu-aviso">
            <h2 style="color: #ffd700; margin-top:0;">ADVERTENCIA DEL SISTEMA</h2>
            <p>Has seleccionado a: <strong id="texto-personaje-elegido" style="color: #fff;"></strong></p>
            <p style="color: #aaa; margin-bottom: 20px;">Para guardar tu progreso, inventario y aparecer en los marcadores, necesitas conectarte a la red.</p>

            <div class="opciones-aviso">
                <a id="btn-login" href="session/login.php" class="btn-retro">INICIAR SESIÓN</a>
                <a id="btn-registro" href="session/registro.php" class="btn-retro">REGISTRARSE</a>
                <button onclick="continuarInvitado()" class="btn-retro btn-peligro">CONTINUAR SIN GUARDAR (INVITADO)</button>
            </div>
        </div>
    </div>

    <div id="pantalla-principal" class="fase-contenedor pantalla-titulo pantalla-oculta">

        <header class="logo-area">
            <img src="./img/logo.png" alt="Resident Evil Trivia" class="main-logo">
            <p class="subtitulo">TEST YOUR KNOWLEDGE OF THE SURVIVAL HORROR</p>
        </header>

        <nav class="menu-area">
            <ul>
                <li><a href="juego.php" class="item-seleccionado">
                        <span class="icono"></span> JUGAR TRIVIA <span class="llave"></span>
                    </a></li>
                <li><a href="./pages/enciclopedia.php"><span class="icono"></span> ENCICLOPEDIA DE RACCOON CITY</a></li>
                <li><a href="#"><span class="icono"></span> ARCHIVOS DE DATOS</a></li>
                <li><a href="#"><span class="icono"></span> OPCIONES</a></li>
                <li><a href="#" onclick="reiniciarPantalla()"><span class="icono"></span> CAMBIAR PERSONAJE</a></li>
            </ul>
        </nav>

        <footer class="hud-area">
            <div class="hud-izquierda">
                <img id="hud-avatar-img" src="./img/avatar_leon.png" alt="Avatar" class="hud-avatar">
                <span class="hud-texto">JUGADOR 1: <span id="hud-nombre-jugador" class="nombre-jugador">LEON S. KENNEDY</span></span>
            </div>
            <div class="hud-derecha">
                <span class="hud-texto">PUNTOS: <span class="puntos-jugador">0</span></span>
            </div>
        </footer>

    </div>

    <script src="./js/main.js"></script>
</body>

</html>