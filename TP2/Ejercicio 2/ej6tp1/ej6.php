<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validacion.js"></script>
    <style>
        .error {
            color: red;
            font-size: 14px;
            display: none;
            margin-left: 10px;
        }
    </style>

</head>

<body>
    <div class="container">

        <div class="card">
            <h2>Formulario ejercicio 6</h2>
            <form id="miFormulario" action="recibirGet6.php" method="get">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre">
                <span class="error" id="error-nombre">Ingrese un nombre</span>

                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido">
                <span class="error" id="error-apellido">Ingrese un apellido</span>

                <label for="edad">Edad:</label>
                <input type="number" name="edad">
                <span class="error" id="error-edad">Ingrese una edad válida</span>

                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion">
                <span class="error" id="error-direccion">Ingrese una dirección</span>

                <label>Nivel de estudios:</label>
                <div class="radio-group">
                    <label><input type="radio" name="estudios" value="1"> Sin estudios</label>
                    <label><input type="radio" name="estudios" value="2"> Primarios</label>
                    <label><input type="radio" name="estudios" value="3"> Secundarios</label>
                </div>
                <span class="error" id="error-estudios">Seleccione un nivel de estudios</span>

                <label for="sexo">Sexo:</label>
                <select name="sexo">
                    <option value="">Seleccione...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
                <span class="error" id="error-sexo">Seleccione un sexo</span>

                <label>Deportes que practica:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="deportes[]" value="Fútbol"> Fútbol</label>
                    <label><input type="checkbox" name="deportes[]" value="Básquet"> Básquet</label>
                    <label><input type="checkbox" name="deportes[]" value="Tenis"> Tenis</label>
                    <label><input type="checkbox" name="deportes[]" value="Vóley"> Vóley</label>
                </div>
                <span class="error" id="error-deportes">Seleccione al menos un deporte</span>

                <input type="submit" value="Enviar">
            </form>
        </div>

    </div>
</body>

</html>