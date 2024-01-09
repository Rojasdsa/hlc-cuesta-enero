<aside id="aside-nav" class="col-md-3 col-lg-2 d-md-block border-end border-bottom p-0">
    <div class="position-sticky">
        <button class="boton-aside border-0 border-end" onclick="toggleAside()">Menú</button>

        <ul class="nav flex-column">

            <li class="nav-item mb-2">
            <a class="nav-link" id="gitDropdownToggle" href="#" onclick="toggleDropdown('gitDropdown')"> Git </a>
                <ul class="nav-list" id="gitDropdown">
                    <li><a class="nav-link" href="#what-git"> Qué es Git </a>
                    <li><a class="nav-link" href="#uses-git"> Para qué sirve </a>
                    <li><a class="nav-link" href="#evens-git"> Ventajas de utilizar Git </a>
                    <li><a class="nav-link" href="#commands-git"> Comandos básicos </a></li>
                </ul>
            </li>

            <li class="nav-item">
            <a class="nav-link" id="dockerDropdownToggle" href="#" onclick="toggleDropdown('dockerDropdown')"> Docker </a>
                <ul class="nav-list" id="dockerDropdown">
                    <li><a class="nav-link" href="#what-docker"> Qué es Docker </a></li>
                    <li><a class="nav-link" href="#uses-docker"> Para qué sirve </a></li>
                    <li><a class="nav-link" href="#evens-docker"> Ventajas de utilizar Docker </a></li>
                    <li><a class="nav-link" href="#commands-docker"> Comandos básicos </a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>