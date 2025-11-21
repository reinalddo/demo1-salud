<?php include 'includes/header.php'; ?>

<main>
    <header class="py-5 bg-dark position-relative" style="background-image: url('https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?q=80&w=1600&auto=format&fit=crop'); background-size: cover; background-position: center;">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-75"></div>
        <div class="container position-relative text-center text-white py-5">
            <h1 class="display-3 fw-bold">Contáctanos</h1>
            <p class="lead mx-auto" style="max-width: 700px;">Estamos aquí para atenderte. Agenda tu cita o resuelve tus dudas al instante.</p>
        </div>
    </header>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6">
                    <div class="mb-5">
                        <h3 class="fw-bold text-primary mb-4">Información de Contacto</h3>
                        
                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-white p-3 rounded-circle shadow-sm text-primary me-3">
                                <i class="bi bi-geo-alt-fill fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Ubicación</h5>
                                <p class="text-muted mb-0">Av. Principal de Pueblo Nuevo, Edif. Salud, Piso 2.<br>San Cristóbal, Táchira.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-white p-3 rounded-circle shadow-sm text-primary me-3">
                                <i class="bi bi-telephone-fill fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Teléfonos</h5>
                                <p class="text-muted mb-0">+58 424 123 4567</p>
                                <p class="text-muted mb-0">0276 345 6789</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-white p-3 rounded-circle shadow-sm text-primary me-3">
                                <i class="bi bi-envelope-fill fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Correo Electrónico</h5>
                                <p class="text-muted mb-0">citas@clinicasalud.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-4 overflow-hidden shadow-sm border">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.969730784742!2d-72.2227166856786!3d7.793033594383816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e666cb0966a3479%3A0x628004f99580884d!2sSan%20Crist%C3%B3bal%2C%20T%C3%A1chira!5e0!3m2!1ses!2sve!4v1645000000000!5m2!1ses!2sve" 
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-5">
                            <h3 class="fw-bold mb-4">Envíanos un Mensaje</h3>
                            <form id="whatsappForm">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label fw-bold">Nombre Completo</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-0" id="nombre" placeholder="Ej: Juan Pérez" required>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="servicio" class="form-label fw-bold">Asunto / Servicio</label>
                                    <select class="form-select form-select-lg bg-light border-0" id="servicio">
                                        <option value="Consulta General">Consulta General</option>
                                        <option value="Cardiología">Cardiología</option>
                                        <option value="Pediatría">Pediatría</option>
                                        <option value="Odontología">Odontología</option>
                                        <option value="Laboratorio">Laboratorio</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="mensaje" class="form-label fw-bold">Mensaje</label>
                                    <textarea class="form-control bg-light border-0" id="mensaje" rows="4" placeholder="Hola, quisiera agendar una cita para..." required></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 btn-lg rounded-pill fw-bold shadow hover-lift">
                                    <i class="bi bi-whatsapp me-2"></i> Enviar por WhatsApp
                                </button>
                                <p class="text-center text-muted small mt-3">Te responderemos inmediatamente a tu chat.</p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<script>
document.getElementById('whatsappForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita que se recargue la página

    // 1. Capturar los datos
    var nombre = document.getElementById('nombre').value;
    var servicio = document.getElementById('servicio').value;
    var mensaje = document.getElementById('mensaje').value;

    // 2. Número de teléfono de la clínica (CAMBIAR ESTE NÚMERO)
    var telefono = "584241234567"; 

    // 3. Crear el mensaje codificado
    var texto = "Hola, mi nombre es *" + nombre + "*.%0A" +
                "Estoy interesado en: *" + servicio + "*.%0A%0A" +
                "Mensaje: " + mensaje;

    // 4. Abrir WhatsApp
    var url = "https://wa.me/" + telefono + "?text=" + texto;
    window.open(url, '_blank');
});
</script>

<?php include 'includes/footer.php'; ?>