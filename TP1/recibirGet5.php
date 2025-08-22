<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
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
                $estudios = $_GET['estudios'];
                $sexo = $_GET['sexo'];

                //comprobamos cual de los radio eligio para amoldarlo al texto
                switch ($estudios) {
                    case "1":
                        $textoEstudios = "No tengo estudios estudios";
                        break;
                    case "2":
                        $textoEstudios = "tengo estudios primarios";
                        break;
                    case "3":
                        $textoEstudios = "tengo estudios secundarios";
                        break;
                    default:
                        $textoEstudios = "no se especificó nivel de estudios";
                }

                if ($edad >= 18) {
                    echo "<h2>Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.</h2>";
                    echo "<h2>Además, $textoEstudios y mi sexo es $sexo.</h2>";
                } else {
                    echo "<h2>No te voy a mostrar todos los datos porque sos menor de edad!</h2>";
                }
            } else {
                echo "<h2>No se envió información</h2>";
            }

            echo '<a href="ej5.html"><h2>Volver al inicio</h2></a>';
            ?>

            
    </div>
</body>
</html>

