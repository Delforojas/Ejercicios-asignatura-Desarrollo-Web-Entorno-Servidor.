<?php
include 'ejercicio2_funciones.php';

$arrayNumeros = [53,66,71,46,22,85,19,67,77,41,60];

$mayor = mayorValor($arrayNumeros);
$menor = menorValor($arrayNumeros);

echo "El mayor valor es: " . $mayor . "<br>";
echo "El menor valor es: " . $menor . "<br>";
echo "La suma de todos los valores es: " . sumaValores($arrayNumeros) . "<br>";
echo "La cantidad de números pares es: " . contarPares($arrayNumeros) . "<br>";
echo "El mayor valor es: " . $mayor . " y está en la posición: " . mayorValorPosicion($arrayNumeros) . "<br>";
echo "El menor valor es: " . $menor . " y está en la posición: " . menorValorPosicion($arrayNumeros) . "<br>";


