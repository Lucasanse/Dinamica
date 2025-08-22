<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
            <?php
                if ($_GET) {
                    $nombre = $_GET['nombre'];
                    $apellido = $_GET['apellido'];
                    $edad = $_GET['edad'];
                    $direccion = $_GET['direccion'];

                    if($edad >=18 ){
                        echo "<h2>Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.</h2>";
                    } else {
                        echo "<h2>No te voy a mostrar los datos porque sos menor de edad! </h2>";
                    }

                    
                } else {
                    echo "<h2>No se envió información";
                }
                echo '<a href="ej4.html"><h2>Volver al inicio</h2></a>'
            ?>
            
    </div>
</body>
</html>

