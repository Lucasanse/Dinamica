<?php
class control_tp3_ej2 {
    private $ext_permitida = "txt";

    /**
     * Procesa el archivo subido y devuelve un array con el resultado.
     * @param array $archivo -> obtenido desde data_file_submitted()
     * @return array
     */
    public function procesarArchivo($archivo) {
        $resultado = [
            "success" => false,
            "mensaje" => "",
            "nombre"  => null,
            "contenido" => null
        ];

        if (!$archivo || $archivo['error'] !== UPLOAD_ERR_OK) {
            $resultado["mensaje"] = "No se seleccionó ningún archivo.";
            return $resultado;
        }

        $nombre_archivo = $archivo['name'];
        $tmp_name = $archivo['tmp_name'];
        $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

        // Validar extensión
        if ($extension !== $this->ext_permitida) {
            $resultado["mensaje"] = "Solo se permiten archivos con extensión .txt";
            return $resultado;
        }

        // Leer contenido
        $contenido = file_get_contents($tmp_name);

        $resultado["success"] = true;
        $resultado["mensaje"] = "Archivo cargado correctamente.";
        $resultado["nombre"]  = $nombre_archivo;
        $resultado["contenido"] = $contenido;

        return $resultado;
    }
}
