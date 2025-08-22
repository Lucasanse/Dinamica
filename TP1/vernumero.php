<?php
// Verificar que se envió el número
if ($_POST) {

    //buscamos el numero utilizando el arreglo de parametros $_POST
    $numero = $_POST['numero'];

    if ($numero > 0) {
        echo "<h2> El número $numero es positivo. </h2>";
    } elseif ($numero < 0) {
        echo "<h2> El número $numero es negativo. </h2>";
    } else {
       echo "<h2> El número es cero </h2>";
    }

} else {
    echo "<h2>No se recibió ningún número.</h2>";
}

// Link para volver al formulario
echo '<a href="ej1.php">Volver</a>';
?>