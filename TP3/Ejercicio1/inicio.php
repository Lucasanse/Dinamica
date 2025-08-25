<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h2 class="mb-4">Subir un archivo (.doc o .pdf, máx 2MB)</h2>

    <form action="subir.php" method="POST" enctype="multipart/form-data" class="card p-3 shadow">
        <div class="mb-3">
            <label for="archivo" class="form-label">Seleccionar archivo:</label>
            <input type="file" name="archivo" id="archivo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Subir</button>
    </form>

</body>
</html>

