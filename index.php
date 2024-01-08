<!-- Header que incluye desde el DOCTYPE hasta la etiqueta <header> -->
<?php include('includes/header.php'); ?>

<main class="container-fluid">
    <div class="row">

        <!-- Sidebar que contendrá el menú de navegación -->
        <?php include('includes/sidebar.php'); ?>

        <!-- Contenido principal -->
        <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <article>
                <h2 class="text-center mt-4">Bienvenido a la Página de Inicio</h2>
                <p class="text-center">Aquí tienes dos tutoriales sencillos para utilizar Git y Docker</p>

                <div class="row justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tutorial Git</h5>
                                <p class="card-text">No vuelvas a extraviar tu código</p>
                                    <a href="git.php" class="btn btn-outline-success">Ver Tutorial</a>
                                </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tutorial Docker</h5>
                                <p class="card-text">Misma versión, menos problemas</p>
                                <a href="docker.php" class="btn btn-outline-success">Ver Tutorial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>
</main>

<!-- Footer que incluye desde <footer> hasta </body> y </html> -->
<?php include('includes/footer.php'); ?>