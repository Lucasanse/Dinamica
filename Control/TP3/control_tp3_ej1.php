<?php
class control_tp3_ej1 {
    private $max_size = 2 * 1024 * 1024; // 2 MB en bytes
    private $ext_permitidas = ['doc', 'pdf'];
    private $carpeta = "archivos/";

    public function procesarArchivo($archivo) {
        $resultado = [
            "success" => false,
            "mensaje" => "",
            "ruta" => null
        ];

        // Crear carpeta si no existe
        if (!file_exists($this->carpeta)) {
            mkdir($this->carpeta, 0777, true);
        }

        if ($archivo['error'] > 0) {
            $resultado["mensaje"] = "No se seleccionó ningún archivo.";
            return $resultado;
        }

        $tmp_name = $archivo['tmp_name'];
        $nombre_archivo = $archivo['name'];
        $tamaño = $archivo['size'];
        $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

        // Validaciones
        if (!in_array($extension, $this->ext_permitidas)) {
            $resultado["mensaje"] = "Solo se permiten archivos .doc o .pdf.";
        } elseif ($tamaño > $this->max_size) {
            $resultado["mensaje"] = "El archivo excede el tamaño máximo de 2 MB.";
        } else {
            $destino = $this->carpeta . basename($nombre_archivo);
            if (move_uploaded_file($tmp_name, $destino)) {
                $resultado["success"] = true;
                $resultado["mensaje"] = "Archivo subido correctamente.";
                $resultado["ruta"] = $destino;
            } else {
                $resultado["mensaje"] = "Error al mover el archivo al servidor.";
            }
        }

        return $resultado;
    }
}
