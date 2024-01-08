/* Mostrar/Ocultar el menú */
function toggleAside() {
    let asideElement = document.getElementById('aside-nav');
    if (asideElement) {
        // Toggle de la clase CSS para cambiar el ancho
        asideElement.classList.toggle('aside-collapsed');

        // Toggle de la clase CSS para cambiar el ancho
        let navLists = document.querySelectorAll('.nav-list');
        navLists.forEach(function (navList) {
            navList.classList.toggle('nav-hidden');
        });
    }
}

/* Reloj con la hora actual */
function actualizarReloj() {
    let relojElemento = document.getElementById('reloj');
    let fechaActual = new Date();

    let horas = fechaActual.getHours();
    let minutos = fechaActual.getMinutes();
    let segundos = fechaActual.getSeconds();

    // Agrega ceros a la izquierda si es necesario para mantener el formato HH:MM:SS
    horas = (horas < 10) ? '0' + horas : horas;
    minutos = (minutos < 10) ? '0' + minutos : minutos;
    segundos = (segundos < 10) ? '0' + segundos : segundos;

    let horaActual = horas + ':' + minutos + ':' + segundos;
    relojElemento.textContent = horaActual;
}

// Actualiza el reloj cada segundo
setInterval(actualizarReloj, 1000);

// Inicializa el reloj cuando se carga la página
window.onload = function () {
    actualizarReloj();
};

/* Agitar el icono de git y al hacer click te lleva a github */
function agitarAutomaticamente() {
    let gitLogo = document.getElementById('gitLogo');
    gitLogo.classList.add('agitacion');

    // Elimina la clase de agitación después de la duración de la animación
    setTimeout(function() {
        gitLogo.classList.remove('agitacion');
    }, 500);
}

// Agitar automáticamente cada 5 segundos (5000 milisegundos)
setInterval(agitarAutomaticamente, 3000);