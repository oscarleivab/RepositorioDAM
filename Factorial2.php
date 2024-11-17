<?php
// Función para calcular el factorial de un número
function factorial($num) {
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    return $result;
}

// Iterar desde 1 hasta 100
for ($i = 1; $i <= 100; $i++) {
    // Si el número no es par, saltar al siguiente
    if ($i % 2 != 0) {
        continue;
    }

    // Calcular y mostrar el factorial del número par
    echo "El factorial de $i es " . factorial($i) . "<br>";

    // Opcional: detener la ejecución si se alcanza un límite
    if ($i == 100) {
        break;
    }
}
?>
