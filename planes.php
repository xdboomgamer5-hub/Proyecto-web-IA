<?php 
include 'includes/header.php'; 

// Datos técnicos extraídos de tus requerimientos
$planes = [
    [
        "nombre" => "Plan Simple",
        "precio" => "250.000",
        "badge" => "Rápido & Eficaz",
        "descripcion" => "Solución ágil basada en plantillas pre-diseñadas profesionales. Ideal para presencia digital inmediata sin cambios estructurales.",
        "puntos" => [
            "Diseño basado en Plantillas",
            "Estructura fija (No editable)",
            "Hosting y Dominio (1 año)",
            "Optimización SEO básica",
            "Seguridad básica de servidor"
        ],
        "destacado" => false
    ],
    [
        "nombre" => "Plan Semi-Custom",
        "precio" => "550.000",
        "badge" => "MÁS SOLICITADO",
        "descripcion" => "Arquitectura híbrida. Base sólida con personalización de componentes para adaptar la identidad visual a tu flujo de negocio.",
        "puntos" => [
            "Diseño Híbrido Personalizable",
            "Panel de administración básico",
            "Integración Pasarela de Pagos",
            "Seguridad SSL de alta gama",
            "Hasta 3 revisiones de diseño"
        ],
        "destacado" => true
    ],
    [
        "nombre" => "Plan Full Custom",
        "precio" => "950.000",
        "badge" => "Solución Elite",
        "descripcion" => "Desarrollo desde cero (Zero-Template). Incluye todas las mejoras del sistema y funcionalidades extra diseñadas a medida.",
        "puntos" => [
            "Código 100% a medida",
            "Cifrado de datos avanzado",
            "Arquitectura escalable sin límites",
            "Funcionalidades Extra e integraciones",
            "Auditoría técnica de seguridad"
        ],
        "destacado" => false
    ]
];
?>

<link rel="stylesheet" href="styles/styles.css">

<main class="info-page-wrapper">
    
    <section class="info-hero text-center">
        <div class="container py-5">
            <h1 class="display-3 fw-bold">Escala tu <span class="text-green">Proyecto</span></h1>
            <p class="lead mt-3 text-secondary mx-auto fs-5" style="max-width: 800px;">
                Selecciona la infraestructura táctica para tu proyecto. Precios transparentes en CLP.
            </p>
        </div>
    </section>

    <section class="container section-spacer">
        <div class="row g-5 align-items-stretch">
            <?php foreach($planes as $p): ?>
            <div class="col-lg-4">
                <div class="plan-card h-100 p-5 <?php echo $p['destacado'] ? 'plan-featured' : ''; ?>">
                    
                    <?php if($p['destacado']): ?>
                        <div class="popular-tag text-uppercase"><?php echo $p['badge']; ?></div>
                    <?php endif; ?>
                    
                    <div class="plan-header text-center mb-4">
                        <?php if(!$p['destacado']): ?>
                            <span class="text-green fw-bold small text-uppercase tracking-widest"><?php echo $p['badge']; ?></span>
                        <?php endif; ?>
                        
                        <h2 class="text-white mt-2 mb-4 h3 fw-bold"><?php echo $p['nombre']; ?></h2>
                        
                        <div class="price-box">
                            <span class="currency text-green fs-4">$</span>
                            <span class="amount display-5 fw-bold text-white"><?php echo $p['precio']; ?></span>
                            <span class="period text-secondary d-block mt-2 small">CLP / Pago único</span>
                        </div>
                    </div>

                    <p class="text-secondary small text-center mb-5" style="min-height: 80px; line-height: 1.6;">
                        <?php echo $p['descripcion']; ?>
                    </p>

                    <ul class="list-unstyled mb-5">
                        <?php foreach($p['puntos'] as $item): ?>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="bi bi-terminal-fill text-green me-3 mt-1" style="font-size: 0.85rem;"></i>
                            <span class="text-white small"><?php echo $item; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="mt-auto text-center">
                        <a href="contacto.php?plan=<?php echo urlencode($p['nombre']); ?>" class="btn-cyber w-100">
                            ADQUIRIR PLAN
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="container pb-6 text-center">
        <p class="text-secondary small opacity-50" style="letter-spacing: 1px;">
            * El Plan Simple utiliza frameworks pre-establecidos para optimizar tiempos de entrega.<br>
            * El Plan Full Custom hereda todas las optimizaciones de seguridad y rendimiento.
        </p>
    </section>

</main>

<?php include 'includes/footer.php'; ?>