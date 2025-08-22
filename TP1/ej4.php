<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">

        <div class="card">
            <h2>Formulario con GET mayor/menor de edad</h2>
            <form action="recibirGet4.php" method="get">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>

                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" required>

                <label for="edad">Edad:</label>
                <input type="number" name="edad" required>

                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" required>

                <input type="submit" value="Enviar">
            </form>
        </div>

    </div>
</body>
</html>
