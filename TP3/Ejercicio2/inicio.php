<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Subir archivo TXT</h2>

    <form action="subir.php" method="POST" enctype="multipart/form-data" class="card p-4 shadow">
        <div class="mb-3">
            <label for="archivo" class="form-label">Seleccionar archivo (.txt):</label>
            <input type="file" name="archivo" id="archivo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Subir y mostrar</button>
    </form>

</body>
</html>
