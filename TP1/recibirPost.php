



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 40px;
            margin: 0;
        }

        .container {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            width: 320px;
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        h1 {
            text-align: center;
            width: 100%;
            color: #fff;
            margin-bottom: 30px;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 15px;
            color:rgb(30, 79, 128);
            text-align: center;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], 
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            transition: border 0.2s ease;
        }

        input[type="text"]:focus, 
        input[type="number"]:focus {
            border: 1px solid #007BFF;
            outline: none;
        }

        input[type="submit"] {
            margin-top: 20px;
            background: #007BFF;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }
    </style>
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
            ?>
            <br><br>
            <a href="ej3.html"><h2>Volver al inicio</h2></a>
    </div>
</body>
</html>