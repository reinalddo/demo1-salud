<?php include 'includes/header.php'; ?>
<style>
    .hero {
        position: relative;
        background-image:
            linear-gradient(rgba(6, 30, 60, 0.55), rgba(6, 30, 60, 0.55)),
            url('assets/hero.jpg');
        background-size: cover;
        background-position: center;
        color: #fff;
        padding: 90px 20px;
    }
    .hero .container { max-width: 1100px; margin: 0 auto; display:flex; gap:40px; align-items:center; }
    .hero .content { flex:1; }
    .hero h1 { font-size: clamp(2rem, 5vw, 4rem); margin:0 0 12px; line-height:1.02; font-weight:700; }
    .hero p { margin:0 0 20px; font-size:1.05rem; opacity:0.95; }
    .cta-btn {
        display:inline-block;
        background:#16a34a;
        color:#fff;
        padding:12px 20px;
        border-radius:10px;
        text-decoration:none;
        font-weight:600;
        box-shadow:0 8px 24px rgba(22,163,74,0.18);
        transition:transform .15s ease, box-shadow .15s ease;
    }
    .cta-btn:hover { transform:translateY(-3px); box-shadow:0 14px 34px rgba(22,163,74,0.22); }

    .services { max-width:1100px; margin:36px auto; padding:20px; display:grid; grid-template-columns: repeat(auto-fit,minmax(240px,1fr)); gap:18px; }
    .card {
        background:#fff;
        border-radius:12px;
        padding:18px;
        box-shadow:0 8px 28px rgba(7,12,23,0.06);
        display:flex; gap:14px; align-items:center;
    }
    .icon {
        width:58px; height:58px; border-radius:10px;
        display:flex; align-items:center; justify-content:center; flex-shrink:0;
        background:linear-gradient(135deg,#f0fbf6,#e6f6ef);
    }
    .card h3 { margin:0; font-size:1.05rem; color:#0f172a; }
    .card p { margin:6px 0 0; color:#475569; font-size:0.95rem; }

    @media (max-width:720px){
        .hero .container { flex-direction:column; text-align:center; }
        .hero .content { width:100%; }
    }
</style>

<section class="hero" role="banner" aria-label="Sección principal">
    <div class="container">
        <div class="content">
            <h1>Tu Salud en Buenas Manos</h1>
            <p>Atención profesional, rápida y cercana. Agenda tu cita o recibe orientación ahora mismo.</p>
            <a class="cta-btn" href="#contacto" role="button">Agenda una cita</a>
        </div>
        <div class="decor" aria-hidden="true"></div>
    </div>
</section>

<section class="services" aria-label="Servicios destacados">
    <article class="card" aria-labelledby="urgencias-title">
        <div class="icon" aria-hidden="true">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#057a55" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <rect x="1" y="7" width="18" height="11" rx="2"></rect>
                <path d="M23 11h-6"></path>
                <path d="M6 7V4a2 2 0 012-2h4"></path>
                <path d="M6 18v2"></path>
                <path d="M16 18v2"></path>
                <path d="M9 11h6M12 8v6" stroke="#057a55" stroke-width="1.8"></path>
            </svg>
        </div>
        <div>
            <h3 id="urgencias-title">Urgencias</h3>
            <p>Atención 24/7 para emergencias y cuidados inmediatos.</p>
        </div>
    </article>

    <article class="card" aria-labelledby="pediatria-title">
        <div class="icon" aria-hidden="true">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#0b6bb0" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2a3 3 0 00-3 3v2a3 3 0 006 0V5a3 3 0 00-3-3z"></path>
                <path d="M5 18a7 7 0 0114 0v1H5v-1z"></path>
                <circle cx="9" cy="12" r="1" fill="#0b6bb0"></circle>
            </svg>
        </div>
        <div>
            <h3 id="pediatria-title">Pediatría</h3>
            <p>Cuidados especializados y cálidos para bebés, niños y adolescentes.</p>
        </div>
    </article>

    <article class="card" aria-labelledby="laboratorio-title">
        <div class="icon" aria-hidden="true">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#a02c9a" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 2h10l-4 6v7a3 3 0 01-6 0V8L7 2z"></path>
                <path d="M8 14h8" stroke="#a02c9a" stroke-width="1.8"></path>
            </svg>
        </div>
        <div>
            <h3 id="laboratorio-title">Laboratorio</h3>
            <p>Análisis rápidos y confiables con resultados claros y seguros.</p>
        </div>
    </article>
</section>
<?php include 'includes/footer.php'; ?>