<!-- Header que incluye desde el DOCTYPE hasta la etiqueta <header> -->
<?php include('includes/header.php'); ?>

<main class="container-fluid">
    <div class="row">

        <!-- Sidebar que contendrá el menú de navegación -->
        <?php include('includes/sidebar.php'); ?>

        <!-- Contenido principal -->
        <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2 class="text-center mt-4">Tutorial Docker</h2>
            <hr>

            <article id="what-docker">
                <h3 class="text-decoration-underline">Qué es Docker</h3>
                <p>Docker es una plataforma de código abierto diseñada para facilitar la creación, implementación y ejecución de aplicaciones en contenedores.</p>

                <h5>Características Clave de Docker:</h5>
                <ul>
                    <li><strong>Contenedores:</strong> Docker utiliza contenedores para encapsular aplicaciones y sus dependencias.</li>
                    <li><strong>Portabilidad:</strong> Los contenedores son portátiles y pueden ejecutarse de manera consistente en diferentes entornos. <span class="badge rounded-pill bg-info"> Importante!</span></li>
                    <li><strong>Eficiencia y Rendimiento:</strong> Los contenedores son livianos y consumen menos recursos.</li>
                    <li><strong>Automatización:</strong> Docker permite la automatización de la implementación y administración de aplicaciones a través de Dockerfiles.</li>
                    <li><strong>Orquestación:</strong> Docker proporciona herramientas de orquestación como Docker Swarm y Kubernetes para gestionar aplicaciones distribuidas.</li>
                    <li><strong>Seguridad:</strong> Docker incluye características de seguridad para aislar contenedores y proteger el sistema subyacente.</li>
                </ul>

                <p>Docker ha cambiado la forma en que se desarrollan y despliegan aplicaciones, facilitando la creación de entornos consistentes y la gestión eficiente de aplicaciones distribuidas.</p>
            </article>

            <article id="uses-docker">
                <h3 class="text-decoration-underline">Para qué sirve</h3>
                <p>Docker es utilizado para:</p>

                <ul>
                    <li><strong>Facilitar la Implementación:</strong> Docker simplifica la implementación de aplicaciones, garantizando que funcionen de manera consistente en diferentes entornos.</li>
                    <li><strong>Aislar Aplicaciones:</strong> Los contenedores de Docker proporcionan aislamiento, lo que significa que una aplicación y sus dependencias pueden ejecutarse sin interferir con otras aplicaciones.</li>
                    <li><strong>Escalabilidad:</strong> Los contenedores son escalables, lo que facilita la gestión de aplicaciones en entornos de nube y la administración de recursos. <span class="badge rounded-pill bg-info"> Importante!</span></li>
                    <li><strong>Automatización:</strong> Docker permite la automatización de la construcción, prueba y despliegue de aplicaciones a través de Dockerfiles y herramientas de orquestación.</li>
                    <li><strong>Desarrollo Ágil:</strong> Facilita el desarrollo ágil al proporcionar entornos de desarrollo consistentes y replicables.</li>
                </ul>

                <p>Docker ha revolucionado la forma en que se desarrollan, implementan y gestionan aplicaciones, proporcionando eficiencia, consistencia y flexibilidad.</p>
            </article>

            <article id="evens-docker">
                <h3 class="text-decoration-underline">Ventajas de utilizar Docker</h3>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Ventaja</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Portabilidad</td>
                            <td>Docker garantiza la portabilidad de las aplicaciones, permitiendo que se ejecuten de manera consistente en diferentes entornos.</td>
                        </tr>
                        <tr>
                            <td>Eficiencia y Rendimiento</td>
                            <td>Los contenedores de Docker son livianos y comparten el kernel del sistema operativo, lo que resulta en una eficiencia y rendimiento mejorados.</td>
                        </tr>
                        <tr>
                            <td>Escalabilidad</td>
                            <td>Los contenedores son escalables, facilitando la gestión de aplicaciones en entornos de nube y la administración de recursos.</td>
                        </tr>
                        <tr>
                            <td>Aislamiento</td>
                            <td>Docker proporciona aislamiento entre aplicaciones y sus dependencias, asegurando que se ejecuten sin interferir entre sí.</td>
                        </tr>
                        <tr>
                            <td>Automatización</td>
                            <td>La automatización de la construcción, prueba y despliegue de aplicaciones se simplifica mediante Dockerfiles y herramientas de orquestación como Docker Compose.</td>
                        </tr>
                        <tr>
                            <td>Desarrollo Ágil</td>
                            <td>Facilita el desarrollo ágil al proporcionar entornos de desarrollo consistentes y replicables.</td>
                        </tr>
                        <tr>
                            <td>Comunidad Activa</td>
                            <td>Docker cuenta con una comunidad activa y un ecosistema robusto, con acceso a un amplio conjunto de imágenes preconstruidas en Docker Hub.</td>
                        </tr>
                        <tr>
                            <td>Seguridad</td>
                            <td>Ofrece características de seguridad para aislar contenedores y proteger el sistema subyacente.</td>
                        </tr>
                    </tbody>
                </table>
            </article>

            <article id="commands-docker">
                <h3 class="text-decoration-underline">Comandos básicos</h3>
                
                <h5>1. Obtener Información</h5>
                <p>Ver información de Docker:</p>
                <p class="code">docker info</p>

                <h5>2. Descargar una Imagen</h5>
                <p>Descargar una imagen de Docker desde Docker Hub:</p>
                <p class="code">docker pull nombre-de-imagen</p>

                <h5>3. Listar Imágenes</h5>
                <p>Ver las imágenes de Docker en tu sistema:</p>
                <p class="code">docker images</p>

                <h5>4. Ejecutar un Contenedor</h5>
                <p>Ejecutar un contenedor a partir de una imagen:</p>
                <p class="code">docker run nombre-de-imagen</p>

                <h5>5. Listar Contenedores en Ejecución</h5>
                <p>Ver los contenedores que están actualmente en ejecución:</p>
                <p class="code">docker ps</p>

                <h5>6. Listar Todos los Contenedores</h5>
                <p>Ver todos los contenedores, incluidos los que están detenidos:</p>
                <p class="code">docker ps -a</p>

                <h5>7. Detener un Contenedor</h5>
                <p>Detener un contenedor en ejecución:</p>
                <p class="code">docker stop id-de-contenedor</p>

                <h5>8. Eliminar un Contenedor</h5>
                <p>Eliminar un contenedor (debe estar detenido):</p>
                <p class="code">docker rm id-de-contenedor</p>

                <h5>9. Eliminar una Imagen</h5>
                <p>Eliminar una imagen de Docker:</p>
                <p class="code">docker rmi nombre-de-imagen</p>
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