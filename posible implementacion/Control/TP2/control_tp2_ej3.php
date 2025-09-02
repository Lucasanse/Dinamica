<?php
class control_tp2_ej3
{

    public function verificarLogin($datos)
    {
        $usuarios = [
            ["usuario" => "user1", "clave" => "usuario1"],
            ["usuario" => "user2", "clave" => "usuario2"],
            ["usuario" => "user3", "clave" => "usuario3"],
            ["usuario" => "user4", "clave" => "usuario4"],
            ["usuario" => "user5", "clave" => "usuario5"],
            ["usuario" => "user6", "clave" => "usuario6"]
        ];

        $usuario = $datos['usuario'] ?? '';
        $clave = $datos['clave'] ?? '';


        $i = 0;
        $encontrado = false;
        $totalUsuarios = count($usuarios);
        $texto="";

        //buscar si el usuario coincide con la contraseña

        while ($i < $totalUsuarios && !$encontrado) {
            if ($usuarios[$i]["usuario"] === $usuario && $usuarios[$i]["clave"] === $clave) {
                $encontrado = true;
            }
            $i++;
        }

        // Mostrar mensaje según resultado
        if ($encontrado) {
            $texto="¡Bienvenido, $usuario !";
        } else {
            $texto="Usuario o contraseña incorrecto";
        }

        return $texto;
    }
}
