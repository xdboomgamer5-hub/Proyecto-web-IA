<?php 
include 'includes/header.php'; 

// --- BASE DE DATOS DE PORTAFOLIO ---
$proyectos = [
    [
        "titulo" => "Titan Shield Banking",
        "cliente" => "Bank de la Nación",
        "categoria" => "Fintech & Seguridad",
        "descripcion" => "Implementación de una infraestructura de microservicios con cifrado de extremo a extremo y auditoría biométrica.",
        "tecnologias" => ["PHP 8.2", "Laravel", "Redis", "AWS Shield"],
        "estado" => "Completado",
        "imagen_clase" => "p-fintech"
    ],
    [
        "titulo" => "E-Commerce Secure Flow",
        "cliente" => "Moda Global S.A.",
        "categoria" => "E-Commerce",
        "descripcion" => "Desarrollo de plataforma de ventas masivas con blindaje contra inyecciones SQL y ataques de fuerza bruta.",
        "tecnologias" => ["React", "Node.js", "MySQL", "Cloudflare"],
        "estado" => "Completado",
        "imagen_clase" => "p-ecommerce"
    ],
    [
        "titulo" => "Health Guard Data",
        "cliente" => "Clínica Central",
        "categoria" => "Salud / Privacidad",
        "descripcion" => "Sistema de gestión de expedientes médicos bajo normativa HIPAA con protección de datos sensibles.",
        "tecnologias" => ["Python", "PostgreSQL", "Docker", "SSL-EV"],
        "estado" => "En Mantenimiento",
        "imagen_clase" => "p-health"
    ],
    [
        "titulo" => "Logistics 4.0 Dashboard",
        "cliente" => "TransPort Log",
        "categoria" => "Industrial / IoT",
        "descripcion" => "Panel de control en tiempo real para flotas de transporte con monitoreo de seguridad en la nube.",
        "tecnologias" => ["Vue.js", "Go", "MongoDB", "Kubernetes"],
        "estado" => "Completado",
        "imagen_clase" => "p-logistics"
    ]
];

// --- DATOS DEL EQUIPO ---
$equipo = [
    [
        "nombre" => "Alex Storm",
        "rol" => "Lead DevSecOps",
        "bio" => "Arquitecto de sistemas resilientes y experto en defensa perimetral.",
        "skills" => ["Hardening", "Backend", "Cloud Security"],
        "icon" => "bi-shield-shaded"
    ],
    [
        "nombre" => "Elena Cipher",
        "rol" => "Ethical Hacker Senior",
        "bio" => "Especialista en auditorías de penetración y análisis forense digital.",
        "skills" => ["Pentesting", "OWASP", "Encryption"],
        "icon" => "bi-incognito"
    ],
    [
        "nombre" => "Marco Code",
        "rol" => "Fullstack Developer",
        "bio" => "Desarrollador enfocado en interfaces seguras y optimización de datos.",
        "skills" => ["React", "Secure API", "Node.js"],
        "icon" => "bi-terminal-fill"
    ]
];
?>

<link rel="stylesheet" href="styles/styles.css">

<main class="info-page-wrapper">
    
    <section class="info-hero text-center py-6">
        <div class="container">
            <h1 class="display-3 fw-bold tracking-tight">Nuestra <span class="text-green">Identidad</span> Digital</h1>
            <p class="lead mt-3 text-secondary mx-auto fs-5" style="max-width: 800px;">
                Expertos en transformar vulnerabilidades en fortalezas empresariales mediante el uso de tecnología táctica.
            </p>
        </div>
    </section>

    <section class="container section-spacer">
        <div class="text-center mb-100">
            <h2 class="section-title">El <span class="text-green">Strike Team</span></h2>
            <p class="text-secondary fs-5">Las mentes detrás de la seguridad de tu infraestructura.</p>
        </div>

        <div class="row g-5">
            <?php foreach($equipo as $m): ?>
            <div class="col-lg-4">
                <div class="team-card p-5 h-100 text-center">
                    <div class="member-header mb-4">
                        <div class="icon-circle mb-3 mx-auto">
                            <i class="bi <?php echo $m['icon']; ?>"></i>
                        </div>
                        <h4 class="text-white mb-1"><?php echo $m['nombre']; ?></h4>
                        <span class="text-green small fw-bold text-uppercase tracking-widest"><?php echo $m['rol']; ?></span>
                    </div>
                    <p class="text-secondary small mb-4"><?php echo $m['bio']; ?></p>
                    <div class="skills-wrapper d-flex flex-wrap justify-content-center gap-2">
                        <?php foreach($m['skills'] as $s): ?>
                            <span class="tech-pill px-3 py-1"><?php echo $s; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="container section-spacer pb-6">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-end mb-100">
            <div>
                <h2 class="section-title mb-2">Portafolio de <span class="text-green">Proyectos</span></h2>
                <p class="text-secondary fs-5">Casos de éxito donde la seguridad y el código avanzado se encuentran.</p>
            </div>
            <span class="badge bg-dark border border-success p-3 text-green mb-3 fs-6">
                Total: <?php echo count($proyectos); ?> Proyectos
            </span>
        </div>

        <div class="row g-5">
            <?php foreach($proyectos as $p): ?>
            <div class="col-lg-6">
                <div class="portfolio-item-card h-100 p-5">
                    <div class="row h-100 align-items-center">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="project-thumb <?php echo $p['imagen_clase']; ?> py-4">
                                <i class="bi bi-code-square display-4 text-white"></i>
                            </div>
                        </div>
                        <div class="col-md-8 d-flex flex-column justify-content-between ps-md-4">
                            <div>
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <span class="text-green fw-bold small text-uppercase"><?php echo $p['categoria']; ?></span>
                                    <span class="status-dot <?php echo ($p['estado'] == 'Completado') ? 'st-done' : 'st-wait'; ?>" title="<?php echo $p['estado']; ?>"></span>
                                </div>
                                <h4 class="text-white mb-2"><?php echo $p['titulo']; ?></h4>
                                <p class="text-green opacity-75 small mb-3">Cliente: <?php echo $p['cliente']; ?></p>
                                <p class="text-secondary small mb-4" style="line-height: 1.6;"><?php echo $p['descripcion']; ?></p>
                            </div>
                            
                            <div class="tech-stack mt-auto">
                                <div class="d-flex flex-wrap gap-2">
                                    <?php foreach($p['tecnologias'] as $tech): ?>
                                        <span class="tech-pill"><?php echo $tech; ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>