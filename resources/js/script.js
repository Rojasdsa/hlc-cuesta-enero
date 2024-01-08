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