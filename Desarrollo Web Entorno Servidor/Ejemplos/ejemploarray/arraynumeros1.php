<!DOCTYPE htm>
<html>
      <head>
	       <title> Operaciones arrrays </title>
	  </head>
	  <body>
<?php
include 'funcionesarray1.php';

$numeros = [53, 66, 71, 46, 22, 85, 19, 67, 77, 41, 60];
$mayor = obtenerMayor($numeros);
echo "El mayor valor del array es: " . $mayor.".<br>";

$menor = obtenerMenor($numeros);
echo "El menor valor del array es: " . $menor.".<br>";

$suma = obtenerSuma($numeros);
echo "La suma de todos los valores del array es: " . $suma.".<br>";

$pares = obtenerPares($numeros);
echo "Los números pares son: " . implode(", ", $pares).".<br>";

$posicionMayor = obtenerPosicion($mayor, $numeros);
echo "El mayor valor del array es" .$mayor." y está en la posición" .$posicionMayor.".<br>";

$posicionMenor = obtenerPosicion($menor, $numeros);
echo "El menor valor del array es" .$menor." y está en la posición".$posicionMenor.".<br>";
?>
		</body>
		</html>

