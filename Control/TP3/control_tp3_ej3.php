<?php
class control_tp3_ej3 {
    private $ext_permitidas = ['jpg', 'png', 'jpeg'];
    private $max_size = 2 * 1024 * 1024; // 2 MB
    private $target_dir = "imagenes/";

    public function procesar($datos, $archivo) {
        $resultado = [
            "exito" => false,
            "mensaje" => "",
            "imagen" => null,
            "datos" => []
        ];

        // Crear carpeta si no existe
        if (!file_exists($this->target_dir)) {
            mkdir($this->target_dir, 0777, true);
        }

        // Verificar permisos de escritura
        if (!is_writable($this->target_dir)) {
            $resultado["mensaje"] = "El directorio {$this->target_dir} no tiene permisos de escritura.";
            return $resultado;
        }

        // Verificar si hay archivo
        if ($archivo['error'] > 0) {
            $resultado["mensaje"] = "Error al subir el archivo de la imagen.";
            return $resultado;
        }

        $tmp_name = $archivo['tmp_name'];
        $nombre_archivo = $archivo['name'];
        $tamaño = $archivo['size'];
        $extension = strtolower(pathinfo($nombre_archivo, PATHINFO_EXTENSION));

        // Validaciones
        if (!in_array($extension, $this->ext_permitidas)) {
            $resultado["mensaje"] = "Solo se permiten archivos .jpg, .png, .jpeg";
            return $resultado;
        }

        if ($tamaño > $this->max_size) {
            $resultado["mensaje"] = "El archivo excede el tamaño máximo de 2 MB.";
            return $resultado;
        }

        // Destino final
        $destino = $this->target_dir . basename($nombre_archivo);

        if (move_uploaded_file($tmp_name, $destino)) {
            $resultado["exito"] = true;
            $resultado["mensaje"] = "Archivo cargado correctamente.";
            $resultado["imagen"] = $destino;

            // Datos de la película
            $resultado["datos"] = [
                "Título" => $datos['titulo'] ?? '',
                "Actores" => $datos['actores'] ?? '',
                "Director" => $datos['director'] ?? '',
                "Guion" => $datos['guion'] ?? '',
                "Producción" => $datos['produccion'] ?? '',
                "Año" => $datos['anio'] ?? '',
                "Nacionalidad" => $datos['nacionalidad'] ?? '',
                "Género" => $datos['genero'] ?? '',
                "Duración" => $datos['duracion'] ?? '',
                "Restricciones de edad" => $datos['edad'] ?? '',
                "Sinopsis" => $datos['sinopsis'] ?? ''
            ];
        } else {
            $resultado["mensaje"] = "Error al mover el archivo al servidor.";
        }

        return $resultado;
    }
}
