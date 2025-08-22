<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">

        <div class="card">
            <h2>Formulario con GET</h2>
            <form action="recibirGet5.php" method="get">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>

                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" required>

                <label for="edad">Edad:</label>
                <input type="number" name="edad" required>

                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" required>

                <label>Nivel de estudios:</label>
                <div class="radio-group">
                    <label><input type="radio" name="estudios" value="1" required> Sin estudios</label>
                    <label><input type="radio" name="estudios" value="2"> Primarios</label>
                    <label><input type="radio" name="estudios" value="3"> Secundarios</label>
                </div>

                <label for="sexo">Sexo:</label>
                <select name="sexo" required>
                    <option value="">Seleccione...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>

                <input type="submit" value="Enviar">
            </form>
        </div>

    </div>
</body>
</html>
