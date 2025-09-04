<?php
class control_tp1_ej8 {

    public function procesarPost($datos) {
        if (empty($datos)) {
            return [
                "mensaje" => "No se recibieron datos"
            ];
        }

        $edad = (int)($datos["edad"] ?? 0);
        $esEstudiante = isset($datos["estudiante"]);
        $precio = 0;

        if ($esEstudiante && $edad < 12) {
            $precio = 160;
        } elseif ($esEstudiante && $edad >= 12) {
            $precio = 180;
        } elseif (!$esEstudiante && $edad < 12) {
            $precio = 160;
        } else {
            $precio = 300;
        }

        return [
            "edad" => $edad,
            "esEstudiante" => $esEstudiante,
            "precio" => $precio
        ];
    }
}
