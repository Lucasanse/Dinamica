<?php
if ($_POST) {
    $edad = (int) $_POST["edad"];
    //variable booleana que chequea si en el form se selecciono o no el check de estudiante
    $esEstudiante = isset($_POST["estudiante"]);
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

    echo "<h2>Resultado</h2>";
    echo "<p>Edad: $edad años</p>";
    echo "<p>Estudiante: ";
    if ($esEstudiante){
        echo "SI </p>";
    } else{
        echo "NO </p>";
    }
    echo "<p>El precio de la entrada es: $$precio</p>";
    echo "<br><a href='ej8.php'>Volver a consultar</a>";
} else {
    echo "<h2>No se recibieron datos</h2>";
}
?>