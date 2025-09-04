<?php
class control_tp1_ej2 {
    /**
     * Procesa las horas recibidas y devuelve un arreglo con los resultados.
     * - "detalle" => array de horas por día
     * - "total"   => total de horas
     * - "mensaje" => texto en caso de error
     */
    public function procesarHoras($datos) {
        if (empty($datos)) {
            return ["mensaje" => "No se recibieron datos."];
        }

        $horas = [
            "Lunes"      => isset($datos['lunes']) ? (int)$datos['lunes'] : 0,
            "Martes"     => isset($datos['martes']) ? (int)$datos['martes'] : 0,
            "Miércoles"  => isset($datos['miercoles']) ? (int)$datos['miercoles'] : 0,
            "Jueves"     => isset($datos['jueves']) ? (int)$datos['jueves'] : 0,
            "Viernes"    => isset($datos['viernes']) ? (int)$datos['viernes'] : 0,
        ];

        foreach ($horas as $dia => &$h) {
            if (!$h) {
                $h = 0;
            }
        }
        unset($h);

        $totalHoras = array_sum($horas);

        return [
            "detalle" => $horas,
            "total"   => $totalHoras,
            "mensaje" => null
        ];
    }
}
