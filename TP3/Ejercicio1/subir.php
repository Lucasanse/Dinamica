<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">

    <?php
    // Tamaño máximo permitido en bytes (2 MB)
    $max_size = 2 * 1024 * 1024;

    // Extensiones permitidas
    $ext_permitidas = ['doc', 'pdf'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Crear carpeta si no existe
        if (!file_exists("archivos")) {
            mkdir("archivos", 0777, true);
        }

        if ($_FILES['archivo']['error'] <= 0) {

            $tmp_name = $_FILES['archivo']['tmp_name'];
            $nombre_archivo = $_FILES['archivo']['name'];
            $tamaño = $_FILES['archivo']['size'];
            $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

            // Validaciones
            if (!in_array($extension, $ext_permitidas)) {
                echo "<div class='alert alert-danger'>Solo se permiten archivos .doc o .pdf</div>";
            } elseif ($tamaño > $max_size) {
                echo "<div class='alert alert-danger'>El archivo excede el tamaño máximo de 2 MB</div>";
            } else {
                // Carpeta donde se guardará el archivo
                $destino = "archivos/" . basename($nombre_archivo);
                if (move_uploaded_file($tmp_name, $destino)) {
                    echo "<div class='alert alert-success'>Archivo subido correctamente.</div>";
                    echo "<a href='$destino' target='_blank' class='btn btn-primary mt-3'>Ver archivo</a>";
                    
                } else {
                    echo "<div class='alert alert-danger'>Error al mover el archivo al servidor</div>";
                }
            }
        } else {
            echo "<div class='alert alert-danger'>No se seleccionó ningún archivo</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Error al subir el archivo</div>";
    }

    echo "<a href='inicio.php' class='btn btn-secondary mt-3 ms-3'>Volver</a>";
    ?>

</body>

</html>