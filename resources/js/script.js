'use strict'
/* ----------------------------------------------------------*/
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
/* ----------------------------------------------------------*/
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
/* ----------------------------------------------------------*/
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


/* ----------------------------------------------------------*/
/* Dropdown para el sidebar */

function toggleDropdown(dropdownId) {
    let dropdown = document.getElementById(dropdownId);
    if (dropdown) {
        let isExpanded = dropdown.style.maxHeight !== '0px';
        
        if (isExpanded) {
            // Si está expandido, colapsa
            dropdown.style.maxHeight = '0px';
        } else {
            // Si no está expandido, expande
            dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
        }
    }
}


/* Vuelve a la página anterior al pulsar el botón de volver*/
// function volver() {
//     history.back();
// }
// En local no funciona, así que hay que forzarlo desde los enlaces