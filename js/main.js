let personajeIdSeleccionado = '';
let personajeNombreSeleccionado = '';
let personajeImgSeleccionada = '';

function elegirPersonaje(id, nombre, rutaImg) {
    personajeIdSeleccionado = id;
    personajeNombreSeleccionado = nombre;
    personajeImgSeleccionada = rutaImg;

    document.getElementById('texto-personaje-elegido').innerText = nombre;
    
    document.getElementById('btn-login').href = `session/login.php?personaje=${id}`;
    document.getElementById('btn-registro').href = `session/registro.php?personaje=${id}`;

    document.getElementById('pantalla-seleccion').classList.remove('pantalla-activa');
    document.getElementById('pantalla-seleccion').classList.add('pantalla-oculta');
    
    document.getElementById('pantalla-aviso').classList.remove('pantalla-oculta');
    document.getElementById('pantalla-aviso').classList.add('pantalla-activa');
}

function continuarInvitado() {
    document.getElementById('hud-nombre-jugador').innerText = personajeNombreSeleccionado;
    document.getElementById('hud-avatar-img').src = personajeImgSeleccionada;

    document.getElementById('pantalla-aviso').classList.remove('pantalla-activa');
    document.getElementById('pantalla-aviso').classList.add('pantalla-oculta');
    
    document.getElementById('pantalla-principal').classList.remove('pantalla-oculta');
    document.getElementById('pantalla-principal').classList.add('pantalla-activa');
}

function reiniciarPantalla() {
    document.getElementById('pantalla-principal').classList.remove('pantalla-activa');
    document.getElementById('pantalla-principal').classList.add('pantalla-oculta');
    
    document.getElementById('pantalla-seleccion').classList.remove('pantalla-oculta');
    document.getElementById('pantalla-seleccion').classList.add('pantalla-activa');
}