<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="../../css/estilo.css">

</head>
<body>
    <div class="container">

        <!-- Formulario POST -->
        <div class="card">
            <h2>Formulario con POST</h2>
            <form action="actionPost.php" method="post">
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

        <!-- Formulario GET -->
        <div class="card">
            <h2>Formulario con GET</h2>
            <form action="actionGet.php" method="get">
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
