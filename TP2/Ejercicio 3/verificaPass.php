<?php

if ($_POST) {
    $usuarios = [
        ["usuario" => "user1", "clave" => "usuario1"],
        ["usuario" => "user2", "clave" => "usuario2"],
        ["usuario" => "user3", "clave" => "usuario3"],
        ["usuario" => "user4", "clave" => "usuario4"],
        ["usuario" => "user5", "clave" => "usuario5"],
        ["usuario" => "user6", "clave" => "usuario6"]
    ];

    // Capturar datos del formulario
    $usuario = $_POST['usuario'] ?? '';
    $clave = $_POST['clave'] ?? '';


    $i = 0;
    $encontrado = false;
    $totalUsuarios = count($usuarios);

    //buscar si el usuario coincide con la contraseña

    while ($i < $totalUsuarios && !$encontrado) {
        if ($usuarios[$i]["usuario"] === $usuario && $usuarios[$i]["clave"] === $clave) {
            $encontrado = true;
        }
        $i++;
    }

    // Mostrar mensaje según resultado
    if ($encontrado) {
        echo "<h2 style='color:green; text-align:center;'>¡Bienvenido, $usuario !</h2>";
    } else {
        echo "<h2 style='color:red; text-align:center;'>Usuario o contraseña incorrecto</h2>";
    }
} else {
    echo "<h2 style='color:red; text-align:center;'>No hay datos!!!
</h2>";
}
