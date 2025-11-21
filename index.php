<?php include 'includes/header.php'; ?>

<main>
    <section class="py-5" style="background: linear-gradient(135deg, #0062E6, #33AEFF); min-height: 85vh; display: flex; align-items: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white mb-5 mb-lg-0">
                    <span class="badge bg-light text-primary mb-3 px-3 py-2 fw-bold rounded-pill shadow-sm">Clínica #1 en Táchira</span>
                    <h1 class="display-3 fw-bold mb-3">Tu Salud Merece <br>La Mejor Atención</h1>
                    <p class="lead mb-4 opacity-90">Somos especialistas en cuidar lo que más importa. Tecnología de vanguardia y calidez humana en un solo lugar.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="contacto" class="btn btn-light btn-lg px-4 text-primary fw-bold shadow hover-lift">
                            Agendar Cita Ahora
                        </a>
                        <a href="servicios" class="btn btn-outline-light btn-lg px-4 fw-bold">
                            Ver Especialidades
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://png.pngtree.com/png-vector/20230928/ourmid/pngtree-young-afro-professional-doctor-png-image_10148632.png" 
                         alt="Doctora Confianza" 
                         class="img-fluid" 
                         style="max-height: 550px; filter: drop-shadow(0 20px 30px rgba(0,0,0,0.15));">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white position-relative" style="margin-top: -50px; z-index: 10;">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 h-100 text-center hover-lift">
                        <div class="text-primary mb-3"><i class="bi bi-award-fill fs-1"></i></div>
                        <h5 class="fw-bold">20 Años de Experiencia</h5>
                        <p class="text-muted small mb-0">Trayectoria comprobada cuidando a familias de la región.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 h-100 text-center hover-lift">
                        <div class="text-primary mb-3"><i class="bi bi-cpu-fill fs-1"></i></div>
                        <h5 class="fw-bold">Tecnología Alemana</h5>
                        <p class="text-muted small mb-0">Equipos de última generación para diagnósticos precisos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm p-4 h-100 text-center hover-lift">
                        <div class="text-danger mb-3"><i class="bi bi-heart-pulse-fill fs-1"></i></div>
                        <h5 class="fw-bold">Urgencias 24/7</h5>
                        <p class="text-muted small mb-0">Siempre disponibles para ti, sin importar la hora.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h5 class="text-primary fw-bold text-uppercase ls-2">Especialidades</h5>
                <h2 class="display-5 fw-bold">Cuidamos cada aspecto de tu vida</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <a href="servicios#cardiologia" class="card border-0 shadow-sm h-100 text-decoration-none hover-lift">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=600&auto=format&fit=crop" class="card-img-top" alt="Cardiología" style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-dark mb-1">Cardiología</h5>
                            <span class="text-primary small fw-bold">Ver Detalles <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3">
                    <a href="servicios#pediatria" class="card border-0 shadow-sm h-100 text-decoration-none hover-lift">
                        <img src="https://images.unsplash.com/photo-1606218566353-29a357eb602d?q=80&w=600&auto=format&fit=crop" class="card-img-top" alt="Pediatría" style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-dark mb-1">Pediatría</h5>
                            <span class="text-warning small fw-bold">Ver Detalles <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3">
                    <a href="servicios#laboratorio" class="card border-0 shadow-sm h-100 text-decoration-none hover-lift">
                        <img src="https://images.unsplash.com/photo-1579154204601-01588f351e67?q=80&w=600&auto=format&fit=crop" class="card-img-top" alt="Laboratorio" style="height: 200px; object-fit: cover;">
                        <div class="card-body text-center p-4">
                            <h5 class="fw-bold text-dark mb-1">Laboratorio</h5>
                            <span class="text-success small fw-bold">Ver Detalles <i class="bi bi-arrow-right"></i></span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-3">
                    <a href="servicios" class="card border-0 shadow-sm h-100 bg-primary text-white text-decoration-none d-flex align-items-center justify-content-center hover-lift text-center p-4">
                        <div>
                            <i class="bi bi-grid-fill fs-1 mb-3"></i>
                            <h4 class="fw-bold">Ver todos los servicios</h4>
                            <span class="btn btn-outline-light rounded-pill btn-sm mt-3">Clic aquí</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-primary fw-bold text-uppercase">Testimonios</h5>
                    <h2 class="fw-bold mb-3">Lo que dicen nuestros pacientes</h2>
                    <p class="text-muted mb-4">La satisfacción y recuperación de nuestros pacientes es nuestra mejor carta de presentación.</p>
                    <a href="nosotros" class="btn btn-outline-primary rounded-pill fw-bold">Conoce al equipo</a>
                </div>
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="p-4 bg-light rounded-4 h-100 border border-light shadow-sm">
                                <div class="text-warning mb-3">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p class="fst-italic text-muted mb-4">"La atención en pediatría fue increíble. Mi hijo ni siquiera lloró con la vacuna. ¡Súper recomendados!"</p>
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3" style="width: 40px; height: 40px;">M</div>
                                    <div>
                                        <h6 class="fw-bold mb-0">María Rodríguez</h6>
                                        <small class="text-muted">Madre de Familia</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 bg-light rounded-4 h-100 border border-light shadow-sm">
                                <div class="text-warning mb-3">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p class="fst-italic text-muted mb-4">"Llegué por una urgencia de noche y la rapidez fue vital. Gracias al equipo de guardia por salvarme."</p>
                                <div class="d-flex align-items-center">
                                    <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center fw-bold me-3" style="width: 40px; height: 40px;">C</div>
                                    <div>
                                        <h6 class="fw-bold mb-0">Carlos Pérez</h6>
                                        <small class="text-muted">Paciente de Urgencias</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-white position-relative overflow-hidden">
        <div class="position-absolute top-0 end-0 p-5 opacity-10">
            <i class="bi bi-telephone-fill" style="font-size: 15rem;"></i>
        </div>
        
        <div class="container position-relative z-1 py-4 text-center">
            <h2 class="display-5 fw-bold mb-3">¿Necesitas atención médica ahora?</h2>
            <p class="lead mb-4 opacity-75">No dejes tu salud para después. Agenda tu cita en menos de 1 minuto vía WhatsApp.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="https://wa.me/584241234567?text=Hola,%20quisiera%20agendar%20una%20cita" target="_blank" class="btn btn-success btn-lg rounded-pill px-5 fw-bold shadow hover-lift">
                    <i class="bi bi-whatsapp me-2"></i> Agendar por WhatsApp
                </a>
                <a href="tel:+34123456789" class="btn btn-outline-light btn-lg rounded-pill px-4 fw-bold">
                    Llamar al Consultorio
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>