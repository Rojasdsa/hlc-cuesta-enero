<!-- Header que incluye el DOCTYPE hasta la etiqueta <body> -->
<?php include('includes/header.php'); ?>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar que contendrá el menú de navegación -->
        <?php include('includes/sidebar.php'); ?>

        <!-- Contenido principal -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <!-- Contenido de tu página -->
            <h2 class="text-center mt-4">Bienvenido a la Página de Inicio</h2>
            <p class="text-center">Aquí tienes dos tutoriales sencillos para utilizar Git y Docker</p>
        </main>
    </div>
</div>

<!-- Footer que incluye las etiquetas de cierre </body> y </html> -->
<?php include('includes/footer.php'); ?>