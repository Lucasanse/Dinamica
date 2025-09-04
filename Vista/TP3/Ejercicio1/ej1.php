<?php
include_once("../../estructura/cabecera.php");
?>

    <div class="container" style="max-width: 600px;">
        <h2 class="mb-4">Subir un archivo (.doc o .pdf, máx 2MB)</h2>

        <form action="action.php" method="POST" enctype="multipart/form-data" class="card p-3 shadow">
            <div class="mb-3">
                <label for="archivo" class="form-label">Seleccionar archivo:</label>
                <input type="file" name="archivo" id="archivo" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Subir</button>
        </form>
    </div>

<?php
include_once("../../estructura/pie.php");
?>

