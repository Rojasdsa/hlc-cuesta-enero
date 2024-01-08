<!-- Header que incluye desde el DOCTYPE hasta la etiqueta <header> -->
<?php include('includes/header.php'); ?>

<main class="container-fluid">
    <div class="row">
        
        <!-- Sidebar que contendrá el menú de navegación -->
        <?php include('includes/sidebar.php'); ?>

        <!-- Contenido principal -->
        <section class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <article>
                <div id="reloj" class="text-center"></div>
                <h2 class="text-center mt-4">Bienvenido a la Página de Inicio</h2>
                <p class="text-center">Aquí tienes dos tutoriales sencillos para utilizar Git y Docker</p>
            </article>
        </section>
    </div>
</main>

<!-- Footer que incluye desde <footer> hasta </body> y </html> -->
<?php include('includes/footer.php'); ?>