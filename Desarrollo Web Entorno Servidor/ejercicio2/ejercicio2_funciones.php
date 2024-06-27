<?php

function mayorValor($array) {
    return max($array);
}

function menorValor($array) {
    return min($array);
}

function sumaValores($array) {
    return array_sum($array);
}

function contarPares($array) {
    $contador = 0;
    foreach ($array as $numero) {
        if ($numero % 2 == 0) {
            $contador++;
        }
    }
    return $contador;
}

function mayorValorPosicion($array) {
    $max = max($array);
    $posicion = array_search($max, $array);
    return $posicion;
}

function menorValorPosicion($array) {
    $min = min($array);
    $posicion = array_search($min, $array);
    return $posicion;
}

?>
