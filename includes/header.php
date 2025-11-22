<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clínica Salud</title>
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2966/2966327.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="css/estilos.css" rel="stylesheet">

    <style>
        /* 1. SCROLL SUAVE */
        html { scroll-behavior: smooth !important; }

        /* 2. PARALLAX */
        .parallax-section {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 500px;
            display: flex;
            align-items: center;
        }
        @media (max-width: 768px) { .parallax-section { background-attachment: scroll; } }

        /* 3. HOVER LIFT (Tarjetas) */
        .hover-lift { transition: all 0.3s ease; }
        .hover-lift:hover { transform: translateY(-10px); box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important; }
        
        /* 4. MENÚ INTELIGENTE (La solución al problema) */
        .navbar {
            transition: all 0.4s ease-in-out;
            padding: 1.2rem 0; /* Espaciado inicial */
            background-color: transparent; /* Transparente al principio */
        }
        
        /* Estado SCROLLED (Cuando bajas) */
        .navbar.scrolled {
            padding: 0.8rem 0;
            background-color: #0d6efd !important; /* AZUL FUERTE (Bootstrap Primary) */
            box-shadow: 0 4px 10px rgba(0,0,0,0.2); /* Sombra para separar del fondo */
        }

        /* Letras del Menú */
        .nav-link {
            color: #ffffff !important; /* Siempre blanco */
            font-weight: 600; /* Letra más gordita */
            font-size: 1.05rem;
            margin-left: 10px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3); /* Sombra negra suave para leerse sobre fotos claras */
            transition: color 0.3s ease;
        }
        
        /* Efecto al pasar el mouse por los links */
        .nav-link:hover {
            color: #ffc107 !important; /* Amarillo al pasar el mouse */
            transform: scale(1.05);
        }
        
        /* Logo */
        .navbar-brand {
            font-size: 1.5rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
    </style>
</head>
<body>

<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index">
            <i class="bi bi-heart-pulse-fill me-2"></i>Clínica Salud
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Alternar navegación">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index">
                        <i class="bi bi-house-door-fill me-1"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros">
                        <i class="bi bi-people-fill me-1"></i> Nosotros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="servicios">
                        <i class="bi bi-activity me-1"></i> Servicios
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">
                        <i class="bi bi-envelope-fill me-1"></i> Contacto
                    </a>
                </li>
                <li class="nav-item ms-lg-3">
                    <a class="btn btn-light text-primary fw-bold rounded-pill px-4 shadow-sm mt-2 mt-lg-0" href="https://wa.me/584241234567" target="_blank">
                        <i class="bi bi-whatsapp"></i> Cita
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>