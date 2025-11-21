
<footer class="bg-dark text-light py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 mb-4">
				<a class="navbar-brand fw-bold text-decoration-none text-light" href="index">Clínica Salud</a>
				<p class="mt-3 mb-1">Calle Falsa 123, Ciudad</p>
				<p class="mb-0">Tel: <a href="tel:+34123456789" class="text-decoration-none text-light">+34 123 456 789</a></p>
			</div>

			<div class="col-md-4 mb-4">
				<h5>Enlaces Rápidos</h5>
				<ul class="list-unstyled">
					<li><a href="index" class="text-decoration-none text-light">Inicio</a></li>
					<li><a href="nosotros" class="text-decoration-none text-light">Nosotros</a></li>
					<li><a href="servicios" class="text-decoration-none text-light">Servicios</a></li>
					<li><a href="contacto" class="text-decoration-none text-light">Contacto</a></li>
				</ul>
			</div>

			<div class="col-md-4 mb-4">
				<h5>Redes & Horario</h5>
				<p>
					<a href="#" class="text-light me-3" aria-label="Facebook">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path d="M22 12a10 10 0 1 0-11.5 9.9v-7h-2v-3h2v-2.3c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2V12h2.2l-.4 3h-1.8v7A10 10 0 0 0 22 12z"/>
						</svg>
					</a>
					<a href="#" class="text-light me-3" aria-label="Instagram">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
							<path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.2a4.8 4.8 0 1 1 0 9.6 4.8 4.8 0 0 1 0-9.6zm0 2a2.8 2.8 0 1 0 0 5.6 2.8 2.8 0 0 0 0-5.6zM18.5 6.2a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
						</svg>
					</a>
				</p>
				<p class="mb-0"><strong>Horario:</strong><br> Lun - Vie: 9:00 - 18:00</p>
			</div>
		</div>

		<div class="border-top border-secondary mt-4 pt-3 text-center">
			<small class="d-block">&copy; <?php echo date('Y'); ?> Clínica Salud. Todos los derechos reservados.</small>
		</div>
	</div>
</footer>

<!-- Bootstrap 5 Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Selecciona enlaces que inician con #
    var links = document.querySelectorAll('a[href^="#"]');
    
    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("click", function(e) {
            var targetId = this.getAttribute("href");
            
            // 1. Si es un enlace vacío (#), evitamos que salte arriba
            if (targetId === "#") {
                e.preventDefault();
                return;
            }

            var targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                e.preventDefault(); // Detenemos el salto automático
                
                // 2. Configuración de la animación manual
                var targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                var startPosition = window.pageYOffset;
                var headerOffset = 70; // Espacio para el menú fijo
                var distance = targetPosition - startPosition - headerOffset;
                var duration = 800; // Duración en milisegundos (0.8 segundos)
                var startTime = null;

                // 3. Función matemática de suavizado (Ease In-Out)
                function animation(currentTime) {
                    if (startTime === null) startTime = currentTime;
                    var timeElapsed = currentTime - startTime;
                    
                    // Calcula cuánto mover en este cuadro
                    var run = ease(timeElapsed, startPosition, distance, duration);
                    
                    window.scrollTo(0, run);

                    if (timeElapsed < duration) requestAnimationFrame(animation);
                }

                // Fórmula de aceleración para que se sienta natural
                function ease(t, b, c, d) {
                    t /= d / 2;
                    if (t < 1) return c / 2 * t * t + b;
                    t--;
                    return -c / 2 * (t * (t - 2) - 1) + b;
                }

                requestAnimationFrame(animation);
            }
        });
    }
});
</script>

</body>
</html>


