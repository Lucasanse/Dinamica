<?php
class control_tp1_ej3 {

    public function procesarGet($datos) {
        if (empty($datos)) {
            return ["mensaje" => "No se envió información."];
        }

        $nombre    = $datos['nombre'] ?? '';
        $apellido  = $datos['apellido'] ?? '';
        $edad      = $datos['edad'] ?? '';
        $direccion = $datos['direccion'] ?? '';

        $mensaje = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";

        return ["mensaje" => $mensaje];
    }

    public function procesarPost($datos) {
        if (empty($datos)) {
            return ["mensaje" => "No se recibieron datos."];
        }

        $nombre    = $datos['nombre'] ?? '';
        $apellido  = $datos['apellido'] ?? '';
        $edad      = $datos['edad'] ?? '';
        $direccion = $datos['direccion'] ?? '';

        $mensaje = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";

        return ["mensaje" => $mensaje];
    }
}
