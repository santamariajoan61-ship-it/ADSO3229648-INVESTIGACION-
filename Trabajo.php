<?php
function sumar($a, $b) {
    return $a + $b;
}

function restar($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    return $b == 0 ? "Error: no se puede dividir entre 0" : $a / $b;
}

do {
    $numero1 = (float) readline("\nPrimer número: ");
    $numero2 = (float) readline("Segundo número: ");

    echo "1. Sumar\n2. Restar\n3. Multiplicar\n4. Dividir\n";
    $opcion = readline("Opción: ");

    switch ($opcion) {
        case 1:
            echo "Resultado: " . sumar($numero1, $numero2) . "\n";
            break;
        case 2:
            echo "Resultado: " . restar($numero1, $numero2) . "\n";
            break;
        case 3:
            echo "Resultado: " . multiplicar($numero1, $numero2) . "\n";
            break;
        case 4:
            echo "Resultado: " . dividir($numero1, $numero2) . "\n";
            break;
        default:
            echo "Opción no válida\n";
    }

    $otra = readline("\n¿Otra operación? (s/n): ");
} while ($otra == "s");