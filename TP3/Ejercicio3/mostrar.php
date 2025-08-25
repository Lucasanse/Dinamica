<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Detalles de la Película</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">


        <div class="card bg-success text-white shadow">
            <div class="card-header">
                <h3 class="mb-0"> La peli introducida es: </h3>
            </div>
            <div class="card-body">
                <?php

                $ext_permitidas = ['jpg', 'png', 'jpeg'];
                // Tamaño máximo permitido en bytes (2 MB)
                $max_size = 2 * 1024 * 1024;
                //directorio donde se guardan las imágenes
                $target_dir = "imagenes/";

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    /* Crear carpeta si no existe, acá se establecen los permisos del directorio
                        0777 -> permisos máximos (lectura, escritura y ejecución para todos).
                        true -> crea directorios anidados si hacen falta.
                    */
                    if (!file_exists($target_dir)) {
                        mkdir($target_dir, 0777, true);
                    }

                    //checkeamos de que el directorio tenga permisos de escritura
                    if (!is_writable($target_dir)) {
                        echo "<div class='alert alert-danger'>El directorio $target_dir no tiene permisos de escritura.</div>";
                    } else {
                        if ($_FILES['archivo']['error'] <= 0) {

                            $tmp_name = $_FILES['archivo']['tmp_name'];
                            $nombre_archivo = $_FILES['archivo']['name'];
                            $tamaño = $_FILES['archivo']['size'];
                            $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

                            // Validaciones
                            if (!in_array($extension, $ext_permitidas)) {
                                echo "<div class='alert alert-danger'>Solo se permiten archivos .jpg, .png, .jpeg</div>";
                            } elseif ($tamaño > $max_size) {
                                echo "<div class='alert alert-danger'>El archivo excede el tamaño máximo de 2 MB</div>";
                            } else {
                                // Carpeta donde se guardará el archivo
                                $destino = $target_dir . basename($nombre_archivo);
                                if (move_uploaded_file($tmp_name, $destino)) {
                                    $titulo       = $_POST['titulo'];
                                    $actores      = $_POST['actores'];
                                    $director     = $_POST['director'];
                                    $guion        = $_POST['guion'];
                                    $produccion   = $_POST['produccion'];
                                    $anio         = $_POST['anio'];
                                    $nacionalidad = $_POST['nacionalidad'];
                                    $genero       = $_POST['genero'];
                                    $duracion     = $_POST['duracion'];
                                    $edad         = $_POST['edad'];
                                    $sinopsis     = $_POST['sinopsis'];
                                    $datos = ["Título", "Actores", "Director", "Guion", "Producción", "Año", "Nacionalidad", "Genero", "Duración", "Restricciones de edad", "Sinopsis"];
                                    $resultados = [$titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $genero, $duracion, $edad, $sinopsis];

                                    // Mostrar imagen
                                    echo "<div class='text-center my-4'>
                                        <img src='$destino' alt='Imagen de la película' class='img-fluid rounded-3 shadow-lg border border-light' style='max-width:400px; object-fit:cover;'>
                                    </div>";

                                    // Mostrar lista de datos
                                    echo '<ul class="list-unstyled">';
                                    for ($i = 0; $i < count($datos); $i++) {
                                        echo '<li><strong>', $datos[$i], ':</strong> ', $resultados[$i], '</li>';
                                    }
                                    echo '</ul>';
                                } else {
                                    echo "<div class='alert alert-danger'>Error al mover el archivo al servidor</div>";
                                }
                            }
                        } else {
                            echo '<div class="alert alert-danger">Error al subir el archivo de la imágen.</div>';
                        };
                    }
                } else {
                    echo '<div class="alert alert-danger">No se recibieron datos del formulario.</div>';
                }

                ?>
            </div>
            <div class="card-footer text-end">
                <a href="formulario.php" class="btn btn-light">Volver</a>
            </div>
        </div>

    </div>

</body>

</html>