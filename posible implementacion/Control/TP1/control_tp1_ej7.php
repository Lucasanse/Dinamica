<?php
class control_tp1_ej7 {

    public function procesarPost($datos) {
        if (empty($datos)) {
            return [
                "mensaje" => "No se recibieron datos."
            ];
        }

        $num1 = (int)($datos["num1"] ?? 0);
        $num2 = (int)($datos["num2"] ?? 0);
        $operacion = $datos["operacion"] ?? "";
        $resultado = "";
        $simbolo   = "";

        switch ($operacion) {
            case "suma":
                $resultado = $num1 + $num2;
                $simbolo = "+";
                break;
            case "resta":
                $resultado = $num1 - $num2;
                $simbolo = "-";
                break;
            case "multiplicacion":
                $resultado = $num1 * $num2;
                $simbolo = "×";
                break;
            default:
                $resultado = "No se permite esta operación";
                $simbolo = "?";
        }

        return [
            "operacion" => $operacion,
            "num1" => $num1,
            "num2" => $num2,
            "simbolo" => $simbolo,
            "resultado" => $resultado
        ];
    }
}
