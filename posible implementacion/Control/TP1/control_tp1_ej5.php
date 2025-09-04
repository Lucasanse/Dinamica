<?php
class control_tp1_ej5 {

    public function procesarGet($datos) {
        if (empty($datos)) {
            return ["mensaje" => "No se envió información."];
        }

        $nombre    = $datos['nombre'] ?? '';
        $apellido  = $datos['apellido'] ?? '';
        $edad      = $datos['edad'] ?? 0;
        $direccion = $datos['direccion'] ?? '';
        $estudios  = $datos['estudios'] ?? '';
        $sexo      = $datos['sexo'] ?? '';

        // Comprobamos estudios
        switch ($estudios) {
            case "1":
                $textoEstudios = "no tengo estudios";
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
            $mensaje1 = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";
            $mensaje2 = "Además, $textoEstudios y mi sexo es $sexo.";
        } else {
            $mensaje1 = "No te voy a mostrar todos los datos porque sos menor de edad!";
            $mensaje2 = "";
        }

        return ["mensaje1" => $mensaje1, "mensaje2" => $mensaje2];
    }
}
