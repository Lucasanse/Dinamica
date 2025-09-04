<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
</head>
<body>
    <h2>Calculadora simple</h2>
    <form action="action.php" method="POST">
        <label>Primer número:</label>
        <input type="text" name="num1" required><br><br>

        <label>Segundo número:</label>
        <input type="text" name="num2" required><br><br>

        <label>Operación:</label>
        <select name="operacion" required>
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACION</option>
        </select><br><br>

        <input type="submit" value="Calcular">
    </form>
</body>
</html>
