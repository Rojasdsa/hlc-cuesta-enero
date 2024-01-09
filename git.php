<!-- Header que incluye desde el DOCTYPE hasta la etiqueta <header> -->
<?php include('includes/header.php'); ?>

<main class="container-fluid">
    <div class="row">

        <!-- Sidebar que contendrá el menú de navegación -->
        <?php include('includes/sidebar.php'); ?>

        <!-- Contenido principal -->
        <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2 class="text-center mt-4">Tutorial Git</h2>
            <hr>

            <article id="what-git">
                <h3 class="text-decoration-underline">Qué es Git</h3>
                <p>Git es un sistema de control de versiones que permite gestionar el historial de cambios en el código fuente de un proyecto.</p>

                <h5>Conceptos Básicos:</h5>

                <ul>
                    <li><strong>Repositorio:</strong> Un espacio donde se almacena el historial de cambios y las versiones de los archivos.</li>
                    <li><strong>Commit:</strong> Una unidad de cambio que representa una versión específica del código.</li>
                    <li><strong>Rama (Branch):</strong> Líneas de desarrollo independientes que permiten trabajar en nuevas características sin afectar la rama principal.</li>
                    <li><strong>Fusionar (Merge):</strong> Combinar los cambios de diferentes ramas para unificar el código. <span class="badge rounded-pill bg-info"> Importante!</span></li>
                    <li><strong>Clonar:</strong> Copiar un repositorio, incluido el historial de cambios, desde un repositorio remoto a uno local. <span class="badge rounded-pill bg-info"> Importante!</span></li>
                    <li><strong>Repositorio Remoto:</strong> Una versión del repositorio alojada en un servidor en línea.</li>
                </ul>

                <p>Git es esencial para el desarrollo colaborativo y la gestión de versiones de proyectos.</p>
            </article>

            <article id="uses-git">
                <h3 class="text-decoration-underline">Para qué sirve</h3>
                <p>Git es un sistema de control de versiones que ofrece varios beneficios en el desarrollo de software:</p>

                <ul>
                    <li><strong>Historial de Cambios:</strong> Mantiene un registro detallado de todas las modificaciones realizadas en el código.</li>
                    <li><strong>Colaboración:</strong> Facilita el trabajo conjunto de múltiples desarrolladores en un proyecto. <span class="badge rounded-pill bg-info"> Importante!</span></li>
                    <li><strong>Ramas (Branches):</strong> Permite trabajar en nuevas características sin afectar la versión principal del código.</li>
                    <li><strong>Despliegue Seguro:</strong> Posibilita desplegar de manera segura y reversible las versiones del software.</li>
                    <li><strong>Trabajo Desconectado:</strong> Permite a los desarrolladores trabajar sin conexión a la red.</li>
                    <li><strong>Integración con Plataformas:</strong> Se integra con plataformas en línea como GitHub para colaboración y seguimiento de problemas. <span class="badge rounded-pill bg-info"> Importante!</span></li>
                    <li><strong>Seguimiento de Versiones:</strong> Permite mantener múltiples versiones y revertir a versiones anteriores según sea necesario.</li>
                    <li><strong>Resolución de Conflictos:</strong> Proporciona herramientas para manejar conflictos en cambios concurrentes.</li>
                </ul>

                <p>En conjunto, Git mejora la gestión del código fuente y facilita el desarrollo colaborativo de proyectos de software.</p>
            </article>

            <article id="evens-git">
                <h3 class="text-decoration-underline">Ventajas de utilizar Git</h3>
                <table class="table mt-3">
                    <tr>
                        <th>Ventaja</th>
                        <th>Beneficio en HTML</th>
                    </tr>
                    <tr>
                        <td>Historial de Cambios</td>
                        <td>Permite rastrear y revertir cambios en el contenido HTML.</td>
                    </tr>
                    <tr>
                        <td>Colaboración en Desarrollo Web</td>
                        <td>Facilita el trabajo colaborativo en proyectos HTML.</td>
                    </tr>
                    <tr>
                        <td>Ramas para Funcionalidades Específicas</td>
                        <td>Posibilita trabajar en nuevas páginas o funcionalidades HTML sin afectar la versión principal.</td>
                    </tr>
                    <tr>
                        <td>Despliegue Seguro</td>
                        <td>Permite implementar actualizaciones de contenido HTML de manera segura y retroceder en caso de problemas.</td>
                    </tr>
                    <tr>
                        <td>Seguimiento de Versiones y Resolución de Conflictos</td>
                        <td>Facilita mantener múltiples versiones de páginas HTML y resolver conflictos en cambios concurrentes.</td>
                    </tr>
                    <tr>
                        <td>Integración con Plataformas en Línea</td>
                        <td>Facilita la colaboración remota y proporciona una plataforma para gestionar problemas y contribuciones al código HTML.</td>
                    </tr>
                </table>
            </article>

            <article id="commands-git">
                <h3 class="text-decoration-underline">Comandos básicos</h3>
                
                <h5>Configurar Git:</h5>
                Configurar nombre de usuario
                <p class="code">git config --global user.name "Tu Nombre"</p>
                Configurar email de usuario
                <p class="code">git config --global user.email "tu@email.com"</p>

                <h5>Iniciar un Repositorio Git:</h5>
                <p class="code">git init</p>

                <h5>Clonar un Repositorio Existente:</h5>
                <p class="code">git clone URL_del_repositorio</p>

                <h5>Gestión de Cambios:</h5>
                Ver el estado de los archivos
                <p class="code">git status</p>
                Añadir todos los archivos al staging area
                <p class="code">git add .</p>
                Confirmar los cambios
                <p class="code">git commit -m "Mensaje descriptivo"</p>

            </article>
            <!-- Botón de Volver -->
            <div class="text-center mt-4">
                <a href="javascript:history.back()" class="boton-volver btn mb-3">Volver</a>
            </div>
        </section>
    </div>
</main>

<!-- Footer que incluye desde <footer> hasta </body> y </html> -->
<?php include('includes/footer.php'); ?>