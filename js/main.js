let personajeIdSeleccionado = '';
let personajeNombreSeleccionado = '';
let personajeImgSeleccionada = '';

window.onload = function() {
    const guardadoId = localStorage.getItem('re_personajeId');
    const guardadoNombre = localStorage.getItem('re_personajeNombre');
    const guardadoImg = localStorage.getItem('re_personajeImg');

    if (guardadoId && guardadoNombre && guardadoImg) {
        personajeIdSeleccionado = guardadoId;
        personajeNombreSeleccionado = guardadoNombre;
        personajeImgSeleccionada = guardadoImg;

        document.getElementById('hud-nombre-jugador').innerText = personajeNombreSeleccionado;
        document.getElementById('hud-avatar-img').src = personajeImgSeleccionada;

        document.getElementById('pantalla-seleccion').classList.remove('pantalla-activa');
        document.getElementById('pantalla-seleccion').classList.add('pantalla-oculta');
        
        document.getElementById('pantalla-aviso').classList.remove('pantalla-activa');
        document.getElementById('pantalla-aviso').classList.add('pantalla-oculta');

        document.getElementById('pantalla-principal').classList.remove('pantalla-oculta');
        document.getElementById('pantalla-principal').classList.add('pantalla-activa');
    }
};

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

    localStorage.setItem('re_personajeId', personajeIdSeleccionado);
    localStorage.setItem('re_personajeNombre', personajeNombreSeleccionado);
    localStorage.setItem('re_personajeImg', personajeImgSeleccionada);

    document.getElementById('pantalla-aviso').classList.remove('pantalla-activa');
    document.getElementById('pantalla-aviso').classList.add('pantalla-oculta');
    
    document.getElementById('pantalla-principal').classList.remove('pantalla-oculta');
    document.getElementById('pantalla-principal').classList.add('pantalla-activa');
}

function reiniciarPantalla() {
    localStorage.removeItem('re_personajeId');
    localStorage.removeItem('re_personajeNombre');
    localStorage.removeItem('re_personajeImg');

    document.getElementById('pantalla-principal').classList.remove('pantalla-activa');
    document.getElementById('pantalla-principal').classList.add('pantalla-oculta');
    
    document.getElementById('pantalla-seleccion').classList.remove('pantalla-oculta');
    document.getElementById('pantalla-seleccion').classList.add('pantalla-activa');
}