<?php 
include 'includes/header.php'; 
include 'includes/data.php'; 

$plan_seleccionado = isset($_GET['plan']) ? $_GET['plan'] : '';
?>

<link rel="stylesheet" href="styles/styles.css">

<main class="info-page-wrapper">
    
    <section class="info-hero text-center">
        <div class="container py-5">
            <h1 class="display-3 fw-bold">Registro de <span class="text-green">Protocolo</span></h1>
            <p class="lead mt-3 text-secondary mx-auto" style="max-width: 700px;">
                Identifícate en el sistema y describe los parámetros de tu proyecto para nuestra auditoría inicial.
            </p>
        </div>
    </section>

    <section class="container mb-100">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="plan-card p-5">
                    <form id="cyberForm">
                        <div class="row g-4">
                            
                            <div class="col-md-6">
                                <label class="text-green small fw-bold mb-2">NOMBRE</label>
                                <input type="text" name="nombre" class="form-control-cyber" placeholder="Ej: Alex" required>
                            </div>

                            <div class="col-md-6">
                                <label class="text-green small fw-bold mb-2">APELLIDO</label>
                                <input type="text" name="apellido" class="form-control-cyber" placeholder="Ej: Storm" required>
                            </div>

                            <div class="col-md-6">
                                <label class="text-green small fw-bold mb-2">CORREO</label>
                                <input type="email" name="email" class="form-control-cyber" placeholder="agente@empresa.cl" required>
                            </div>

                            <div class="col-md-6">
                                <label class="text-green small fw-bold mb-2">TELÉFONO</label>
                                <input type="tel" name="telefono" class="form-control-cyber" placeholder="+56 9 ...." required>
                            </div>

                            <div class="col-12">
                                <label class="text-green small fw-bold mb-2">PLAN SOLICITADO</label>
                                <select name="plan" class="form-control-cyber" required>
                                    <option value="" disabled <?php echo $plan_seleccionado == '' ? 'selected' : ''; ?>>Seleccione el nivel de infraestructura...</option>
                                    <?php foreach($planes_db as $p): ?>
                                        <option value="<?php echo $p['nombre']; ?>" <?php echo $plan_seleccionado == $p['nombre'] ? 'selected' : ''; ?>>
                                            <?php echo $p['nombre']; ?> (<?php echo $p['precio']; ?> CLP)
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="text-green small fw-bold mb-2">DESCRIPCIÓN</label>
                                <textarea name="mensaje" rows="4" class="form-control-cyber" placeholder="Ingresa los requerimientos tácticos de tu sitio web..." required></textarea>
                            </div>

                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn-cyber w-100">
                                    EJECUTAR SOLICITUD
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content plan-card border-success" style="background-color: var(--bg-dark) !important;">
                <div class="modal-body text-center p-5">
                    <div class="icon-circle mb-4 mx-auto" style="width: 80px; height: 80px; font-size: 2.5rem;">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h2 class="text-main fw-bold mb-3">PROTOCOLO ACTIVADO</h2>
                    <p class="text-dim mb-4">Solicitud enviada con éxito. Los parámetros han sido encriptados y enviados al Strike Team para su análisis.</p>
                    
                    <button type="button" class="btn-cyber py-2 px-4 w-100" data-bs-dismiss="modal">
                        ENTENDIDO
                    </button>
                </div>
            </div>
        </div>
    </div>

</main>

<script>
document.getElementById('cyberForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Detiene el envío real para mostrar la animación
    
    // Mostramos el modal usando la API de Bootstrap
    var modalExito = new bootstrap.Modal(document.getElementById('successModal'));
    modalExito.show();
    
    // Limpia el formulario después del envío simulado
    this.reset();
});
</script>

<?php include 'includes/footer.php'; ?>