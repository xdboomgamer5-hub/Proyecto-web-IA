<?php 
    // Comienzo del documento HTML5
    // Esta estructura es estándar para cualquier página del sitio.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desarrollo Web Seguro y Soporte Continuo para PYMES | Desarrollador Web</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>

<?php 
    // INICIO: Navbar (Barra de Navegación)
    // Usamos bg-dark y sticky-top para un aspecto profesional y fijo.
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-lg">
        <div class="container">
            <a class="navbar-brand fw-bolder text-success fs-5" href="index.php">
                <i class="bi bi-shield-shaded me-2"></i> Desarrollador Web
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <?php // Links de navegación alineados a la derecha ?>
                <div class="navbar-nav ms-auto align-items-lg-center">
                    
                    <a class="nav-link text-white-50" href="index.php">
                        <i class="bi bi-house-door-fill me-1"></i> Inicio
                    </a>
                    
                    <a class="nav-link text-white-50" href="info.php">
                        <i class="bi bi-info-circle-fill me-1"></i> Información
                    </a>
                    
                    <?php // El enlace de "Planes" es el principal punto de conversión y se destaca. ?>
                    <a class="nav-link fw-bold text-white" href="planes.php">
                        <i class="bi bi-patch-check-fill me-1"></i> Planes y Precios
                    </a>
                    
                    <?php // Botón de Llamada a la Acción (CTA) para Contactar ?>
                    <a class="btn btn-success ms-lg-3 px-3 py-2" href="contacto.php">
                        <i class="bi bi-headset me-1"></i> Contactar
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php 
    // FIN: Navbar
    // Se abre la etiqueta <main> que contendrá el contenido específico de cada página (index, planes, info).
?>
<main>