<?php
$titulo = "Contacto -Mail";
$css_extra = "contacto-mail.css";
include 'templates/head.php';
?>

<?php include 'templates/header.php'; ?>

<section class="contact-mail-section my-5">
    <div class="container">
        <h2 class="text-center ">Envíame un Correo</h2>
        <form id="contact-mail-form" method="POST" class="mx-auto" style="max-width: 600px;">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
            </div>
            <button class="button-whatsapp" onclick="sendMail(event)">Enviar Mensaje</button>
        </form>
    </div>
</section>

<?php include 'templates/footer.php'; ?>
</body>