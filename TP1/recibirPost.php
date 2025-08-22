<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
            <?php
            if ($_POST) {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $edad = $_POST['edad'];
                $direccion = $_POST['direccion'];

                echo "<h2>Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.</h2>";
            } else {
                echo "<h2>No se recibieron datos.</h2>";
            }
            echo '<br><br>
            <a href="ej3.php"><h2>Volver al inicio</h2></a>'
            ?>
            
    </div>
</body>
</html>