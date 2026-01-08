if (jQuery) {
    console.log("jQuery está disponible");
} else {
    console.log("jQuery NO está disponible");
}
const url = "http://localhost:3000/conocimientos";
conocimientos(url);

// --- Funcionalidad para la Sección de Conocimientos ---
document.addEventListener('DOMContentLoaded', () => {
    if (document.getElementById('conocimientos-list')) {
        fetchConocimientos(); // Cargar la sección de conocimientos
    }
});

const fetchConocimientos = async () => {
    try {
        const response = await fetch('js/conocimientos.json'); // <--- CAMBIA ESTA URL
        const conocimientos = await response.json();
        renderConocimientos(conocimientos);
        setupConocimientosFilters(conocimientos);
    } catch (error) {
        console.error('Error al cargar los conocimientos:', error);
        document.getElementById('conocimientos-list').innerHTML = '<p class="text-danger text-center">No se pudieron cargar los conocimientos.</p>';
    }
};

const renderConocimientos = (conocimientos, filtro = 'all') => {
    console.log(conocimientos);
    const container = document.getElementById('conocimientos-list');
    container.innerHTML = '';

    conocimientos.forEach(conocimiento => {
        // Aplicar el filtro de categoría
        if (filtro !== 'all' && conocimiento.categoria !== filtro) {
            return;
        }

        const tagsHtml = conocimiento.etiquetas.map(tag =>
            `<span class="badge bg-secondary me-1">${tag}</span>`
        ).join('');

        const cardHtml = `
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow h-100 knowledge-card">
                    <div class="card-body">
                        <h5 class="card-title text-success">${conocimiento.titulo}</h5>
                        <p class="card-text">${conocimiento.descripcion}</p>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-layer-group me-1"></i> Categoría: ${conocimiento.categoria}
                            </small>
                            <span class="badge bg-info text-dark">
                                ${conocimiento.experiencia_anios}+ años
                            </span>
                        </div>
                        <div class="mt-2">
                           ${tagsHtml}
                        </div>
                    </div>
                </div>
            </div>
        `;
        container.innerHTML += cardHtml;
    });
};

const setupConocimientosFilters = (conocimientos) => {
    document.querySelectorAll('.knowledge-filter-btn').forEach(button => {
        button.addEventListener('click', (e) => {
            const filterValue = e.target.getAttribute('data-filter');
            renderConocimientos(conocimientos, filterValue);

            // Activar visualmente el botón seleccionado
            document.querySelectorAll('.knowledge-filter-btn').forEach(btn => btn.classList.remove('active'));
            e.target.classList.add('active');
        });
    });
};


// Manejo del formulario de contacto SOLO SE E EJECUTA EN CONTACTO
if (document.getElementById('contact-form')) {
    document.getElementById('contact-form').addEventListener('submit', function (e) {
        e.preventDefault(); // Detener el envío tradicional

        // Recoger datos
        const nombre = document.getElementById('nombre').value;
        const email = document.getElementById('email').value;
        const mensaje = document.getElementById('mensaje').value;

        // --- OPCIÓN FÁCIL: Usar Formspree ---
        // 1. Cambia la acción del formulario en el HTML: <form action="https://formspree.io/f/tu_codigo_aqui" method="POST">
        // 2. Si usas JavaScript, envía los datos con fetch a tu endpoint del backend.

        alert(`Mensaje enviado por ${nombre}. (Implementación de backend requerida para envío real).`);

        // Resetear el formulario después de la 'simulación'
        this.reset();
    });
}

function sendMail(e) {
    e.preventDefault();
    var params = {
        nombre: document.getElementById("nombre").value,
        email: document.getElementById("email").value,
        mensaje: document.getElementById("mensaje").value,
    };
    console.log(params);
    if (!params.nombre || !params.email || !params.mensaje) {
        Swal.fire({
            title: "Datos incompletos",
            text: "Por favor, completa todos los campos antes de enviar el mensaje.",
            icon: "warning",
            confirmButtonText: "Aceptar",
        });
        return;
    }

    $.ajax({
        type: "POST",
        url: "functions/enviarMail.php",
        data: params,
        success: function (response) {
            var res = JSON.parse(response);
            if (res.status === 'success') {
                Swal.fire({
                    title: "Mensaje enviado",
                    text: "Tu mensaje ha sido enviado correctamente.",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                });
                document.getElementById("contact-mail-form").reset();
            } else {
                Swal.fire({
                    title: "Error",
                    text: "Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente más tarde.",
                    icon: "error",
                    confirmButtonText: "Aceptar",
                });
            }
        }
    });
}

async function conocimientos(url) {
    console.log(url);
    const response = await fetch(url);

    if (response.ok) {
        const data = await response.json();
        console.log(data);
    } else {
        console.log(response.status)
    }
}