<?php 
    include 'includes/header.php'; 
?>

<link rel="stylesheet" href="styles/indexStyles.css">

<?php // SECCIÓN 1: HERO (Versión Dark) ?>
<section class="py-5 hero-dark" id="hero">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-3 fw-bolder mb-3 text-white">
                    Desarrollo Web con <span class="text-green">Seguridad y Soporte</span> Integrados
                </h1>
                
                <p class="lead text-secondary mb-4">
                    Impulsa tu PYME con un sitio web profesional, optimizado y, lo más importante: <strong>totalmente protegido</strong> frente a las amenazas digitales.
                </p>
                
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-lg-start">
                    <a href="planes.php" class="btn btn-green btn-lg px-4 fw-bold shadow-glow">
                        Ver Planes y Niveles de Seguridad
                    </a>
                    <a href="info.php" class="btn btn-outline-light btn-lg px-4">
                        Conoce Nuestro Proceso
                    </a>
                </div>
            </div>
            
            <div class="col-lg-5 d-none d-lg-block text-center">
                <div class="image-container">
                    <img src="img/logo.png" alt="Seguridad Digital" class="img-fluid rounded-4 shadow-green-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<?php // SECCIÓN 2: PILARES (Tarjetas Dark con borde verde) ?>
<section class="py-5 bg-darker border-top border-bottom border-secondary" id="pilares">
    <div class="container px-5">
        <h2 class="text-center fw-bolder mb-5 text-white">
            ¿Por qué elegirnos? Valoramos tu <span class="text-green">Confianza</span> y tu Seguridad.
        </h2>
        
        <div class="row gx-5 justify-content-center">
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 feature-card-dark p-4">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <h3 class="h4 fw-bolder text-white">Seguridad Desde Cero</h3>
                        <p class="text-secondary small">
                            Implementamos las mejores prácticas de Ciberseguridad en cada línea de código. Protege tu activo digital de los riesgos comunes.
                        </p>
                        <a href="informacion.php#seguridad" class="btn-link-green">Ver detalles &rarr;</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 feature-card-dark p-4">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <h3 class="h4 fw-bolder text-white">Soporte Continuo</h3>
                        <p class="text-secondary small">
                            Tu web siempre al día y funcionando. Planes de mantenimiento proactivo para actualizaciones y copias de seguridad.
                        </p>
                        <a href="planes.php" class="btn-link-green">Explorar planes &rarr;</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 feature-card-dark p-4">
                    <div class="card-body">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <h3 class="h4 fw-bolder text-white">Soluciones a Medida</h3>
                        <p class="text-secondary small">
                            Metodología profesional y clara. Soluciones escalables que se ajustan perfectamente a los objetivos de tu negocio PYME.
                        </p>
                        <a href="informacion.php#proceso" class="btn-link-green">Nuestra metodología &rarr;</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php // SECCIÓN 3: CAROUSEL (Mantenemos tu lógica pero con estilo integrado) ?>
<section class="py-5 bg-black" id="galeria-proyectos">
    <div class="container px-5 text-center">
        <h2 class="fw-bolder mb-5 text-white">Nuestro Compromiso <span class="text-green">Visual</span></h2>
        
        <div id="carouselExampleIndicators" class="carousel slide shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slide1.png" class="d-block w-100" alt="Ciberseguridad">
                    <div class="carousel-caption d-none d-md-block text-start bg-blur p-4 rounded-3">
                        <h5 class="fw-bold text-green">Ciberseguridad en Foco</h5>
                        <p>Cada proyecto se inicia con una mentalidad de protección total.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide2.png" class="d-block w-100" alt="Mantenimiento">
                    <div class="carousel-caption d-none d-md-block text-start bg-blur p-4 rounded-3">
                        <h5 class="fw-bold text-green">Soporte Continuo</h5>
                        <p>Te acompañamos después de la entrega para que tu sitio nunca falle.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/slide3.png" class="d-block w-100" alt="Código">
                    <div class="carousel-caption d-none d-md-block text-start bg-blur p-4 rounded-3">
                        <h5 class="fw-bold text-green">Código Limpio y Escalable</h5>
                        <p>Desarrollo personalizado que crece al ritmo de tu negocio.</p>
                    </div>
                </div>
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>

<?php // SECCIÓN 4: CTA FINAL ?>
<section class="py-5 cta-green-section">
    <div class="container px-5 text-center">
        <h2 class="fw-bolder mb-4 text-dark">¿Listo para tener un sitio web que realmente funciona?</h2>
        <a class="btn btn-dark btn-xl fw-bold shadow-lg" href="contacto.php">
            ¡Hablemos de tu Proyecto!
        </a>
    </div>
</section>

<?php 
    include 'includes/footer.php'; 
?>