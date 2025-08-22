<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>ejercicio 8</title>
</head>
<body>
    <h2>Consultar el valor de entradas</h2>
    <form action="ej8Control.php" method="POST">
        <label>Edad:</label>
        <input type="number" name="edad" min="0" required><br><br>

        <label>¿Es estudiante?</label>
        <input type="checkbox" name="estudiante" value="1"><br><br>

        <input type="submit" value="Calcular precio">
        <input type="reset" value="Limpiar formulario">
    </form>
</body>
</html>
