<?php
$pga = basename($_SERVER['PHP_SELF']);
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#inicio">Mi Portafolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link <?= $pga == "index.php" ? "active" : '' ?>" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link <?= $pga == "acerca-de-mi" ? "active" : '' ?>" href="index.php#acerca-de-mi">Acerca de Mí</a></li>
                    <li class="nav-item"><a class="nav-link <?= $pga == "conocimientos.php"  ? "active" : '' ?>" href="conocimientos.php">Conocimientos</a></li>
                    <!-- <li class="nav-item"><a class="nav-link <?= $pga == "proyectos" ? "active" : '' ?>" href="index.php#proyectos">Proyectos</a></li> -->
                    <li class="nav-item"><a class="nav-link <?= $pga == "contacto.php" ? "active" : '' ?>" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>