<?php include 'includes/header.php'; ?>
<style>
    .hero {
        background: linear-gradient(180deg, #eef7ff 0%, #f8fbff 100%);
        padding: 80px 20px;
    }
    .hero .hero-inner { max-width:1100px; margin:0 auto; display:flex; gap:30px; align-items:center; }
    .hero h1 { font-size: clamp(1.8rem, 4.5vw, 3.4rem); margin:0 0 12px; font-weight:700; color:#05224a; }
    .hero p { margin:0 0 20px; color:#334155; font-size:1.05rem; }
    .services-row { max-width:1100px; margin:36px auto; padding:0 20px; }
    .service-card { border-radius:12px; box-shadow:0 8px 24px rgba(10,20,40,0.06); padding:22px; text-align:center; }
    .service-icon { font-size:28px; display:block; width:56px; height:56px; margin:0 auto 12px; align-items:center; justify-content:center; border-radius:10px; background:#f1f8ff; color:#0b6bb0; display:flex; }
    .phone-strip { background:#0d6efd; color:#fff; padding:18px 12px; text-align:center; }
    @media (max-width:768px){ .hero .hero-inner { flex-direction:column; text-align:center; } }
</style>

<section class="hero" role="banner" aria-label="Hero - Tu salud">
    <div class="hero-inner">
        <div class="hero-content">
            <h1>Tu Salud, Nuestra Prioridad</h1>
            <p>Atención integral y humana con profesionales especializados. Reserva tu consulta y recibe el mejor cuidado.</p>
            <a class="btn btn-primary btn-lg" href="contacto" role="button">Agendar Cita</a>
        </div>
        <div class="hero-visual" aria-hidden="true">
            <img src="assets/hero.jpg" alt="Consulta médica" style="max-width:420px; width:100%; border-radius:12px; box-shadow:0 12px 40px rgba(13,38,76,0.08);">
        </div>
    </div>
</section>

<section class="services-row" aria-label="Servicios destacados">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="service-card">
                <div class="service-icon" aria-hidden="true">🩺</div>
                <h3>Medicina General</h3>
                <p class="mb-0">Consultas, diagnóstico y seguimiento para toda la familia.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <div class="service-icon" aria-hidden="true">👶</div>
                <h3>Pediatría</h3>
                <p class="mb-0">Contención y controles pediátricos desde el nacimiento hasta la adolescencia.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <div class="service-icon" aria-hidden="true">🧪</div>
                <h3>Laboratorio</h3>
                <p class="mb-0">Análisis rápidos y confiables con interpretación profesional.</p>
            </div>
        </div>
    </div>
</section>

<section class="phone-strip" aria-label="Llamada a la acción - Llamar">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
            <div>
                <strong>¿Necesitas ayuda inmediata?</strong>
            </div>
            <div>
                <a href="tel:+34123456789" class="text-white text-decoration-none"><span class="fw-bold">Llámanos al +34 123 456 789</span></a>
            </div>
            <div>
                <a href="contacto" class="btn btn-light">Agenda una cita</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>