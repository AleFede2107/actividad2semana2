<?php

//Problema de Lista Invertida:
function invertirArray($array) {
    return array_reverse($array);
}
$listaDeNumeros = [1, 2, 3, 4, 5];
$arrayInvertido = invertirArray($listaDeNumeros);

echo "Array original: " . implode(", ", $numeros) . PHP_EOL;
echo "Array invertido: " . implode(", ", $arrayInvertido) . PHP_EOL;

//Problema de suma de numeros Pares:

function sumarNumerosPares($array) {
    $suma = 0;

    foreach ($array as $numero) {
        if ($numero % 2 === 0) {
            $suma += $numero;
        }
    }

    return $suma;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumaPares = sumarNumerosPares($numeros);

echo "La suma de los números pares es: $sumaPares" . PHP_EOL;

//Problema de Frecuencia de caracteres:
function calcularFrecuenciaCaracteres($cadena) {
    $frecuencia = [];

    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];

        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia;
}

$cadena = "hola mundo";
$frecuenciaCaracteres = calcularFrecuenciaCaracteres($cadena);

echo "Frecuencia de caracteres:\n";
foreach ($frecuenciaCaracteres as $caracter => $frecuencia) {
    echo "'$caracter': $frecuencia\n";
}

//Problema de Bucle anidado:
function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        for ($j = $altura - $i; $j > 0; $j--) {
            echo " ";
        }
        
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        
        echo PHP_EOL;
    }
}

$altura = 5;
imprimirPiramide($altura);

?>
