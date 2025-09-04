<?php
include_once("../../estructura/cabecera.php");
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow p-4">
                    <h2 class="text-center mb-4">Member Login</h2>

                    <form id="loginForm" action="action.php" method="POST" novalidate>
                        <!-- Usuario -->
                        <div class="mb-3">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Username" required>
                            <div class="invalid-feedback">Debe ingresar un usuario.</div>
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-3">
                            <input type="password" class="form-control" id="clave" name="clave" placeholder="Password" required>
                            <div class="invalid-feedback">La contraseña debe tener al menos 8 caracteres, contener letras y números y no ser igual al usuario.</div>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Login</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Validacion JS y Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../js/validacion_tp2_ej3.js"></script>

<?php
include_once("../../estructura/pie.php");
?>