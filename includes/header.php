<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clínica Salud</title>

    <!-- Bootstrap 5 CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <link href="css/estilos.css" rel="stylesheet">

<style>
        /* 1. SCROLL SUAVE: Para que el clic se deslice elegante */
    html {
        scroll-behavior: smooth;
    }

    /* 2. PARALLAX: Para que el fondo se quede quieto y el contenido pase por encima */
    .parallax-section {
        background-attachment: fixed; /* El secreto del efecto */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        min-height: 500px;
        display: flex;
        align-items: center;
    }

    /* 3. HOVER LIFT: Para que las tarjetas floten al pasar el mouse */
    .hover-lift {
        transition: all 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-10px); /* Se levanta 10px */
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
    }
    
    /* Ajuste para móviles: Desactiva parallax en celulares (ahorra batería y evita bugs) */
    @media (max-width: 768px) {
        .parallax-section {
            background-attachment: scroll;
        }
    }
</style>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top transition-all">
        <div class="container">
        <a class="navbar-brand fw-bold" href="/">Clínica Salud</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Alternar navegación">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicios">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- <body> permanece abierto para que las páginas incluyan su contenido y el footer -->