<?php
$titulo = "Contacto";
$css_extra = "contacto.css";
include 'templates/head.php';
?>

<?php include 'templates/header.php'; ?>

<section class="contact-info-section">
    <h2>Datos de Contacto</h2>
    <div class="contact-cards-container text-center">

        <div class="contact-card">
            <i class="icon fa-brands fa-whatsapp"></i>
            <h3 class="card-title">Contactar por WhatsApp</h3>
            <p class="card-text">+52 81 3193 7464</p>
            <a href="https://wa.me/528131937464?text=Hola%20Ricardo%20me%20comunico%20desde%20tu%20portafolio" class="button-whatsapp">
                <iconify-icon icon="ic:baseline-whatsapp" width="1.2rem" height="1.2rem"></iconify-icon>
                Contactar
            </a>
        </div>

        <div class="contact-card">
            <i class="icon fas fa-map-marker-alt"></i>
            <h3 class="card-title">Dirección</h3>
            <p class="card-text">Ixhuatlán de Madero, Veracruz, Mx. <strong>(Dispuesto a reubicarse)</strong></p>
        </div>
        <div class="contact-card">
            <i class="icon fas fa-envelope"></i>
            <h3 class="card-title">Enviar un Email</h3>
            <p class="card-text">ricardohernandez@gmail.com</p>
            <a href="contacto-mail.php" class="button-whatsapp">Enviar mensaje</a>
        </div>


    </div>
    <!-- crea un apartado para mostrar botones de redes sociales linkedin, github... -->
    <div class="social-media-section mt-2">
        <h2>Echa un viztaso en:</h2>
        <div class="social-icons-container">
            <a href="https://github.com/Ricardo9-24" target="_blank" class="btn btn-outline-secondary icon"><i class="fab fa-github"></i>
                GitHub</a>
            <a href="https://www.linkedin.com/in/ricardo-hernandez-863901211/" target="_blank" class="btn btn-outline-secondary icon"><i
                    class="fab fa-linkedin"></i> LinkedIn</a>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="docs/CV-Ricardo Hernandez.pdf" target="_blank" class="button-whatsapp btn-lg">
            <i class="fas fa-download me-2"></i> Descargar/Ver CV
        </a>
    </div>
</section>
<?php include 'templates/footer.php'; ?>