<?php
$titulo = "Mi Portafolio - Richard Hernandez";
include 'templates/head.php';
?>
<?php include 'templates/header.php'; ?>

<main class="container mt-5">
    <section id="inicio" class="p-0">
        <div class="superposicion-perfil-container">
            <div class="banner">
                <div class="top-background bg-color-perfil marquee-content">
                    <span class="text-large">DESARROLLADOR WEB</span>
                </div>
            </div>

            <div class="avatar-central-wrapper text-center">
                <div class="avatar-split-box">
                    <img src="img/perfil.jpg" alt="Foto de Perfil"
                        class="img-fluid rounded-circle avatar-img-overlay">
                </div>
            </div>

            <div class=" text-center  p-5"
                style="border-radius: 30px 30px 30px 3px; margin-top: 20px;">
                <h1 class="display-4 fw-bold mt-5 pt-3" style="color: #19f58f;">¡Hola! Soy Richard</h1>
                <p class="lead col-lg-12 mx-auto" style="color: white; font-family: 'europa', sans-serif; font-size: 1.6em !important;">
                    Desarrollador Full Stack con enfoque en la eficiencia y la innovación. Apasionado por
                    transformar ideas complejas en soluciones web elegantes y de alto rendimiento. con PHP,
                    Javascript, MySql, JQuery principalmente. pero también he trabajado en
                    periodos cortos con proyectos en Angular y NodeJs.
                </p>
                <a href="#trayectoria" class="btn btn-success btn-lg mt-3">Trayectoria</a>
            </div>

        </div>
    </section>
    <section id="acerca-de-mi" class="py-5 mt-5 ">
        <h2 class="text-center mb-5 display-5 fw-bold text-success">Acerca de Mí</h2>

        <div class="row mb-5">
            <div class="col-lg-8 mx-auto">
                <p class="lead text-center">
                    Mi viaje en el desarrollo comenzó hace mas de 5 años, centrándose en desarrollo web. En mi trayectoria he
                    tenido la oportunidad de liderar proyectos en Red Efectiva(now Paynau), lo
                    que me ha permitido consolidar mis habilidades en el desarrollo web.
                </p>

                <h3 class="mt-4 text-center">Logros Destacados</h3>
                <ul class="list-group list-group-flush " style="border-radius: 15px;">
                    <li class="list-group-item logros-li"><i class="fas fa-medal text-warning me-2"></i> Optimización
                        de las consultas de base de datos MySQL para sistema interno de la empresa Red Efectiva.</li>
                    <li class="list-group-item logros-li"><i class="fas fa-project-diagram text-success me-2"></i>
                        Apoyo para la arquitertura a nivel de base de datos mysql para proyecto de procesador de pagos</li>
                    <li class="list-group-item logros-li"><i class="fas fa-award text-info me-2"></i> Capacitación a
                        nuevos integrantes y asi como tambien a al equipo bajo mi cargo en algunos módulos de proyecto en C#</li>
                </ul>
            </div>
        </div>

        <h3 class="text-center mb-4 mt-5">Habilidades Blandas</h3>
        <div class="row text-center">
            <div class="col-md-3 mb-3">
                <div class="card card-habilidad p-3 h-100">
                    <i class="fas fa-handshake fa-3x text-success mb-2"></i>
                    <p class="fw-bold">Adaptabilidad</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-habilidad p-3 h-100">
                    <i class="fas fa-lightbulb fa-3x text-warning mb-2"></i>
                    <p class="fw-bold">Pensamiento Analítico</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-habilidad p-3 h-100">
                    <i class="fas fa-users-cog fa-3x text-info mb-2"></i>
                    <p class="fw-bold">Trabajo en Equipo</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card card-habilidad p-3 h-100">
                    <i class="fas fa-comments fa-3x text-danger mb-2"></i>
                    <p class="fw-bold">Comunicación Efectiva</p>
                </div>
            </div>
        </div>
    </section>

    <section class="trayectoria" id="trayectoria">
        <h2 class="text-center mb-5 display-5 fw-bold text-success">Trayectoria Profesional</h2>

        <div class="timeline">
            <div class="timeline-item left">
                <div class="content">
                    <span class="date">2021 – 2025</span>
                    <h3>Desarrollador Full Stack (Remoto)</h3>
                    <h4>Soluciones Creativas · San Pedro, N.L</h4>
                    <p>
                        Desarrollo de páginas web con PHP, Angular y MySQL.
                        Implementación de APIs con PHP, integración de WhatsApp Meta Bussiness
                    </p>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="content">
                    <span class="date">2019 – 2021</span>
                    <h3>Desarrollador Full Stack</h3>
                    <h4>Red Efectiva (now Paynau) · Monterrey N.L</h4>
                    <p>
                        Encargado de proyecto de pago deservicios y servicios,
                        Tambien de dar soporte a aplicacion de venta de boleto de la lortería
                        nacional, generación de Web Service, Manejo e integración de proveedores
                        de servicios de pagos eletrónicos, análisis y correción de errores de tareas
                        en C#.
                    </p>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="content">
                    <span class="date">2018 – 2019</span>
                    <h3>Desarrollador Web</h3>
                    <h4>Sofnet Soluciones · Monterrey, N.L</h4>
                    <p>
                        Trabaje en un siste ERP,
                        Integre el modulo de facturación 3.3, generación de
                        reportes en PDF y Excel y colaboré en proyecto en .NET
                    </p>
                </div>
            </div>
        </div>
    </section>


</main>
<?php include 'templates/footer.php'; ?>