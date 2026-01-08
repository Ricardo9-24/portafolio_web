<?php
$titulo = "Mis conocimientos";
$css_extra = "conocimientos.css";
include './templates/head.php';
?>

<?php
$menu = "conocimientos";
include "./templates/header.php"
?>
<section id="conocimientos" class="container py-5">

    <h2 class="text-center mb-5 display-5 fw-bold text-success">Conocimientos Técnicos</h2>

    <div class="text-center mb-4">
        <button class="btn btn-outline-success m-2 knowledge-filter-btn active"
            data-filter="all">Todos</button>
        <button class="btn btn-outline-success m-2 knowledge-filter-btn"
            data-filter="Lenguaje">Lenguajes</button>
        <button class="btn btn-outline-success m-2 knowledge-filter-btn"
            data-filter="Framework">Frameworks</button>
        <button class="btn btn-outline-success m-2 knowledge-filter-btn"
            data-filter="Herramienta">Herramientas</button>
    </div>

    <div class="row carousel-container">
        <div class="carousel-track" id="conocimientos-list">
            <p class="text-center text-muted">Cargando conocimientos...</p>
        </div>
    </div>


</section>
<?php include "./templates/footer.php"; ?>