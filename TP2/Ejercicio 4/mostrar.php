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
                <?php if ($_POST) {
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

                    echo '<ul class="list-unstyled">';

                    for ($i = 0; $i < count($datos); $i++) {
                        echo '<li><strong>', $datos[$i], ':</strong> ', $resultados[$i], '</li>';
                    }

                    echo '</ul>';
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