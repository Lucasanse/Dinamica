<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_FILES['archivo']['error'] <= 0) {

            $nombre_archivo = $_FILES['archivo']['name'];
            $tmp_name = $_FILES['archivo']['tmp_name'];
            $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

            // Validar que sea TXT
            if ($extension != "txt") {
                echo "<div class='alert alert-danger'>Solo se permiten archivos con extensión .txt</div>";
            } else {
                // Leer contenido del archivo
                $contenido = file_get_contents($tmp_name);

                echo "<div class='alert alert-success'>Archivo cargado correctamente: <b>$nombre_archivo</b></div>";
                echo "<label class='form-label mt-3'>Contenido del archivo:</label>";
                echo "<textarea class='form-control' rows='10'>" . $contenido . "</textarea>";
            }
        } else {
            echo "<div class='alert alert-warning'>No se seleccionó ningún archivo.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'> Error al subir el archivo.</div>";
    }
    ?>

</body>

</html>