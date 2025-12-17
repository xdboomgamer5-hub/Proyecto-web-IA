<?php 
    // Cerramos la etiqueta <main> que abrimos en el header
?>
</main>

<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center text-md-start">
        <div class="row text-center text-md-start">

            <?php // Columna 1: Branding y Propósito ?>
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold text-success">
                    <i class="bi bi-shield-shaded me-2"></i>Desarrollador Web
                </h5>
                <p class="text-white-50">
                    Soluciones digitales seguras y soporte técnico especializado para PYMES. Protegemos tu negocio en el mundo digital.
                </p>
            </div>

            <?php // Columna 2: Enlaces Rápidos ?>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold text-success">Enlaces</h5>
                <p><a href="index.php" class="text-white-50 text-decoration-none">Inicio</a></p>
                <p><a href="info.php" class="text-white-50 text-decoration-none">Información</a></p>
                <p><a href="planes.php" class="text-white-50 text-decoration-none">Planes</a></p>
                <p><a href="contacto.php" class="text-white-50 text-decoration-none">Contacto</a></p>
            </div>

            <?php // Columna 3: Contacto ?>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold text-success">Contacto</h5>
                <p class="text-white-50"><i class="bi bi-house-door-fill me-2"></i> Tu Ciudad, País</p>
                <p class="text-white-50"><i class="bi bi-envelope-fill me-2"></i> info@tudominio.com</p>
                <p class="text-white-50"><i class="bi bi-telephone-fill me-2"></i> +123 456 7890</p>
            </div>

        </div>

        <hr class="mb-4">

        <?php // Copyright y Redes Sociales ?>
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8">
                <p class="text-white-50"> 
                    © <?php echo date("Y"); ?> Todos los derechos reservados por:
                    <a href="#" class="text-success fw-bold text-decoration-none">Tu Nombre/Empresa</a>
                </p>
            </div>

            <div class="col-md-5 col-lg-4">
                <div class="text-center text-md-end">
                    <a href="#" class="text-white me-4"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-4"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white me-4"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php 
    // IMPORTANTE: Scripts de Bootstrap 5 (JS)
    // Sin esto, el Carousel (Slider) y el menú móvil no funcionarán.
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php // Script para inicializar automáticamente el carrusel con un tiempo específico (opcional) ?>
<script>
    const myCarousel = document.querySelector('#carouselExampleIndicators')
    const carousel = new bootstrap.Carousel(myCarousel, {
      interval: 5000, // Cambia cada 5 segundos
      wrap: true
    })
</script>

</body>
</html>