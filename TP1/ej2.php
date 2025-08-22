<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Horas de cursada</title>
</head>
<body>
    <h2>Ingrese las horas de cursada de Programación Web Dinámica</h2>
    <form action="horas.php" method="get">
        <label>Lunes:</label>
        <input type="number" name="lunes" min="0" required><br><br>

        <label>Martes:</label>
        <input type="number" name="martes" min="0" required><br><br>

        <label>Miércoles:</label>
        <input type="number" name="miercoles" min="0" required><br><br>

        <label>Jueves:</label>
        <input type="number" name="jueves" min="0" required><br><br>

        <label>Viernes:</label>
        <input type="number" name="viernes" min="0" required><br><br>

        <input type="submit" value="Calcular total de horas">
    </form>
</body>
</html>
