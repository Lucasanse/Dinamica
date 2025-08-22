<?php

if ($_GET) {
// Crear un array unidimensional con los datos recibidos
//si no hay datos en los formularios, el valor en el arreglo correspondiente a ese día va a ser 0
//la función isset() sirve para saber si una variable está definida y no es null.
$horas = [
    "Lunes" => isset($_GET['lunes']) ? (int)$_GET['lunes'] : 0,
    "Martes" => isset($_GET['martes']) ? (int)$_GET['martes'] : 0,
    "Miércoles" => isset($_GET['miercoles']) ? (int)$_GET['miercoles'] : 0,
    "Jueves" => isset($_GET['jueves']) ? (int)$_GET['jueves'] : 0,
    "Viernes" => isset($_GET['viernes']) ? (int)$_GET['viernes'] : 0,
];

foreach ($horas as $dia => &$h) {
    if(!$h){
        $h = 0;
    }
}
unset($h); 

// Calcular el total de horas
$totalHoras = array_sum($horas);

// Mostrar resultado
echo "<h2>Horas de cursada por semana:</h2>";
echo "<ul>";
foreach ($horas as $dia => $h) {
    echo "<li>$dia: $h horas</li>";
}
echo "</ul>";

echo "<h3>Total de horas: $totalHoras horas</h3>";

// Link para volver al formulario
echo '<a href="ej2.html">Volver</a>';

}else {
    echo "<h2>No se recibieron datos.</h2>";
}

?>