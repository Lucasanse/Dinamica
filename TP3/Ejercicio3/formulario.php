<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Cargar Película - Cinem@s</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-box {
            max-width: 1100px;
            margin: 30px auto;
            padding: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .btn-enviar {
            background-color: #0d6efd;
            color: white;
        }

        .btn-borrar {
            background-color: white;
            border: 1px solid #ccc;
            color: black;
        }

        small {
            color: gray;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form-box">
            <h2 class="text-center mb-4">Cargar Película - Cinem@s</h2>
            <form action="mostrar.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                        <div class="invalid-feedback">Ingrese el título</div>
                    </div>
                    <div class="col-md-6">
                        <label for="actores" class="form-label">Actores</label>
                        <input type="text" class="form-control" id="actores" name="actores" required>
                        <div class="invalid-feedback">Ingrese los actores</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="director" class="form-label">Director</label>
                        <input type="text" class="form-control" id="director" name="director" required>
                        <div class="invalid-feedback">Ingrese el director</div>
                    </div>
                    <div class="col-md-6">
                        <label for="guion" class="form-label">Guion</label>
                        <input type="text" class="form-control" id="guion" name="guion" required>
                        <div class="invalid-feedback">Ingrese el guion</div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="produccion" class="form-label">Producción</label>
                        <input type="text" class="form-control" id="produccion" name="produccion" required>
                        <div class="invalid-feedback">Ingrese la producción</div>
                    </div>
                    <div class="col-md-3">
                        <label for="anio" class="form-label">Año</label>
                        <input type="text" class="form-control form-control-sm" id="anio" name="anio" maxlength="4" pattern="\d{4}" required>
                        <div class="invalid-feedback">Ingrese un año válido (4 numeros enteros)</div>
                    </div>

                </div>
                <div class="row mb-3">

                    <div class="col-md-6">
                        <label for="anio" class="form-label">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required>
                        <div class="invalid-feedback">Ingrese la nacionalidad de la película</div>
                    </div>

                    <div class="col-md-3">
                        <label for="genero" class="form-label">Género</label>
                        <select class="form-select form-select-sm" id="genero" name="genero" required>
                            <option value="">Seleccione...</option>
                            <option>Comedia</option>
                            <option>Drama</option>
                            <option>Terror</option>
                            <option>Románticas</option>
                            <option>Suspenso</option>
                            <option>Otras</option>
                        </select>
                        <div class="invalid-feedback">Seleccione un género</div>
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="duracion" class="form-label">Duración</label>
                        <input type="text" class="form-control form-control-sm" id="duracion" name="duracion" maxlength="3" pattern="\d{1,3}" required>
                        <small>(minutos)</small>
                        <div class="invalid-feedback">Ingrese duración válida (números)</div>
                    </div>

                    <div class="col-md-8">
                        <label class="form-label">Restricciones de Edad</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edad" value="Todo público" required>
                            <label class="form-check-label">Todo público</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edad" value="Mayores de 7 años">
                            <label class="form-check-label">Mayores de 7 años</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="edad" value="Mayores de 18 años">
                            <label class="form-check-label">Mayores de 18 años</label>
                        </div>
                        <div class="invalid-feedback">Seleccione una restricción</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="archivo" class="form-label">Seleccionar imagen:</label>
                    <input type="file" name="archivo" id="archivo" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="sinopsis" class="form-label">Sinopsis</label>
                    <textarea class="form-control" id="sinopsis" name="sinopsis" rows="4" required></textarea>
                    <div class="invalid-feedback">Ingrese la sinopsis</div>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" class="btn btn-enviar">Enviar</button>
                    <button type="reset" class="btn btn-borrar">Borrar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="validacion.js"></script>
</body>

</html>