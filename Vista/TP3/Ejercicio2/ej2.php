
<?php
include_once("../../estructura/cabecera.php");
?>

<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
    <div class="container" style="max-width: 600px;">
        <div class="card p-4 shadow">
            <h2 class="text-center mb-4">Subir archivo TXT</h2>

            <form action="action.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="archivo" class="form-label">Seleccionar archivo (.txt):</label>
                    <input type="file" name="archivo" id="archivo" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Subir y mostrar</button>
            </form>
        </div>
    </div>
</main>

<?php
include_once("../../estructura/pie.php");
?>
