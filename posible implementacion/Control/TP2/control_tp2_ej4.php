<?php
class control_tp2_ej4 {
    /**
     * Procesa los datos recibidos del formulario de películas.
     * No imprime nada en pantalla, solo devuelve un array con los datos.
     */
    public function procesarDatos($datos) {
        $respuesta = [];

        // Si no hay datos, devolvemos null
        if (empty($datos)) {
            return null;
        }

        // Mapear los campos del formulario
        $respuesta["Título"]               = $datos['titulo'] ?? '';
        $respuesta["Actores"]              = $datos['actores'] ?? '';
        $respuesta["Director"]             = $datos['director'] ?? '';
        $respuesta["Guion"]                = $datos['guion'] ?? '';
        $respuesta["Producción"]           = $datos['produccion'] ?? '';
        $respuesta["Año"]                  = $datos['anio'] ?? '';
        $respuesta["Nacionalidad"]         = $datos['nacionalidad'] ?? '';
        $respuesta["Género"]               = $datos['genero'] ?? '';
        $respuesta["Duración"]             = $datos['duracion'] ?? '';
        $respuesta["Restricciones de edad"] = $datos['edad'] ?? '';
        $respuesta["Sinopsis"]             = $datos['sinopsis'] ?? '';

        return $respuesta;
    }
}
