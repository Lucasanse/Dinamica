<?php
class control_tp1_ej1 {
    /**
     * Procesa el número recibido y devuelve un mensaje.
     * No imprime nada en pantalla, solo retorna el string.
     */
    public function procesarNumero($datos) {
        if (empty($datos) || !isset($datos['numero'])) {
            return "No se recibió ningún número.";
        }

        $numero = $datos['numero'];

        if (!is_numeric($numero)) {
            return "El valor ingresado no es un número válido.";
        }

        if ($numero > 0) {
            return "El número $numero es positivo.";
        } elseif ($numero < 0) {
            return "El número $numero es negativo.";
        } else {
            return "El número es cero.";
        }
    }
}
