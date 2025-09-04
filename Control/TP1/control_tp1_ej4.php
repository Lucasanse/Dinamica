<?php
class control_tp1_ej4 {

    public function procesarGet($datos) {
        if (empty($datos)) {
            return ["mensaje" => "No se envió información."];
        }

        $nombre    = $datos['nombre'] ?? '';
        $apellido  = $datos['apellido'] ?? '';
        $edad      = $datos['edad'] ?? '';
        $direccion = $datos['direccion'] ?? '';

        if ($edad >= 18) {
            $mensaje = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";
        } else {
            $mensaje = "No te voy a mostrar los datos porque sos menor de edad!";
        }

        return ["mensaje" => $mensaje];
    }
}
